<?php

/**
 * Number of mailboxes
 *
 * Recommended frequency: daily
 *
 * @author Israel Viana isra00@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html
 */

include 'init.php';

$sql = <<<SQL
SELECT
    COUNT(id) count
FROM
    mail
SQL;

$q = mysql_query($sql);
$count = mysql_fetch_assoc($q);
DataDogStatsD::gauge('plesk.mailboxes.count', $count['count']);
