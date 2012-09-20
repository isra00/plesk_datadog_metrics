Plesk metrics to your Datadog dashboards
========================================

plesk_datadog_metrics is a set of useful PHP scripts that can send some metrics from your Plesk server (whether it's localhost or a remote server) to your Datadog dashboards. They are intended to be launched by cron jobs like this:

* 0 * * * php /path/to/your/scripts/cron_plesk_traffic_domain.php

This example cron job would send traffic per domain data to Datadog each day at 0:00AM.

At this moment, just a few metrics are implemented. Feel free to contact me at isra00 AT gmail DOT com if you want to have new metrics... or you can fork the repo and write your own scripts!

God bless you.

