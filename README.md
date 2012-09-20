Cool Plesk metrics in your Datadog dashboards
=============================================

**plesk_datadog_metrics** is a set of useful PHP scripts that can send some metrics from your Plesk server (whether it's localhost or a remote server) to your Datadog dashboards.

Setting up
----------

The first thing to do is edit the init.php file and change the values of the following constants:

    define('DATADOG_APIKEY', 'your datadog api key');
    define('DATADOG_APPKEY', 'your datadog app key');

    define('MYSQL_HOST', 'localhost');
    define('MYSQL_USER', 'admin');
    define('MYSQL_PASSWORD', 'your admin pasword');
    define('MYSQL_DB', 'psa');

You can get your MySQL password in the file /etc/psa/.psa.shadow

If you don't know your API API Key or App Key, check your [Datadog settings](https://app.datadoghq.com/account/settings#api).

Run them with cron jobs
-----------------------

The scripts are intended to be launched by cron jobs like this:

    * 0 * * * php /path/to/your/scripts/traffic_domain_month.php

With this example, the cron job would send data about traffic per domain to Datadog each day at 0:00AM.

Remember: it's up to you when and which scripts are executed, and by which system user. However, each script includes a recommended frequency of execution in the first comment of the source code.

Metrics
-------

At this moment, just a few metrics are implemented:

* Traffic per domain for the current month
* Number of domains
* Number of clients
* Number of mailboxes

Of course, you can add your own metrics. It's very simple! Just create a new script with the Skeleton and implement whichever metric you want.

Feel free to contact me at isra00 AT gmail DOT com if you want to have new metrics. I will try to implement them.

God bless you.

