<?php

/**
 * Total disk space used
 *
 * Recommended frequency: daily
 *
 * @author Israel Viana isra00@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html
 */

include 'init.php';

$allocated = disk_total_space('/') - disk_free_space('/');
$allocated = ceil($allocated / (1024*1024));

DataDogStatsD::gauge('plesk.clients.disk.used.total', $allocated);
