<?php

/**
 * Monthly total and per-domain visits stats, from AWStats.
 *
 * Recommended frequency: daily
 *
 * @author Israel Viana isra00@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html
 */

include 'init.php';

$sql = <<<SQL
SELECT
    name
FROM
    domains
SQL;

$q = mysql_query($sql);

$global_stats = array('total' => 0);

while ($domain = mysql_fetch_row($q)) {

	$domain = $domain[0];

	$awstats_dir = '/var/www/vhosts/' . $domain . '/statistics/webstat';

	$data_file = exec('cd ' . $awstats_dir . ' && ls *' . $domain . '-http.txt ');
	$awstats_datafile = $awstats_dir . '/' . $data_file;

	if (!file_exists($awstats_datafile)) {
		continue;
	}
	
	$data_lines = file($awstats_datafile);

	$in_day_block = false;
	
	$data_pos = explode(' ' , $data_lines[11]);
	$data = substr(implode('', $data_lines), $data_pos[1]);

	$days = explode("\n", $data);

	$final_days = array();

	foreach ($days as $day) {
		if (substr($day, 0, 3) == 'END') {
			break;
		}
		$final_days[] = $day;
	}
	unset($day);

	// First line is BEGIN_DAY
	array_shift($final_days);

	$visits = array('total' => 0);

	foreach ($final_days as $day) {
		$slices = explode(' ', $day);
		$visits[$slices[0]] = $slices[4];
		$visits['total'] += $slices[4];
		$global_stats['total'] += $slices[4];
	}

	DataDogStatsD::gauge('plesk.awstats.monthly.' . $domain, $visits['total']);

	$global_stats[$domain] = $visits;
}

DataDogStatsD::gauge('plesk.awstats.monthly.total', $global_stats['total']);
log_event('plesk.awstats.monthly.total = ' . $global_stats['total']);

