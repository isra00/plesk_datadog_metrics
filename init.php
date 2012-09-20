<?php

// Common boostrap routines from cron jobs

include_once 'vendor/datadogstatsd.php';

define('DATADOG_APIKEY', 'your datadog api key');
define('DATADOG_APPKEY', 'your datadog app key');

define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'admin');
define('MYSQL_PASSWORD', 'your admin pasword');
define('MYSQL_DB', 'psa');

mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD);
mysql_select_db(MYSQL_DB);

DataDogStatsD::configure(DATADOG_APIKEY, DATADOG_APPKEY);

