<?php

// Common boostrap routines from cron jobs

include_once 'vendor/datadogstatsd.php';

define('DATADOG_APIKEY', '9c637256a055572a7b6dcbe384b0d78b');
define('DATADOG_APPKEY', '97cc29c4d82bd27abdba2b4fa502f0a18b92a862');

define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'admin');
define('MYSQL_PASSWORD', 'QoMMbWqmFB4=');
define('MYSQL_DB', 'psa');

mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD);
mysql_select_db(MYSQL_DB);

DataDogStatsD::configure(DATADOG_APIKEY, DATADOG_APPKEY);

