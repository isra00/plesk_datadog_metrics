<?php

/**
 * (Skeleton for new metrics: write here a short description of the metric)
 *
 * Recommended frequency: (weekly/daily/hourly/...)
 *
 * @author (your name) (your email)
 * @license http://www.gnu.org/copyleft/gpl.html
 */

include 'init.php';


//Here you can collect some data from the psa database


/*
 * You can send different kinds of metrics:
 *
 * DataDogStatsD::gauge('plesk.name_of_your_metric', $value);
 * DataDogStatsD::timing('plesk.name_of_your_metric', $time, $sampleRate = 1, array $tags = null);
 * DataDogStatsD::histogram('plesk.name_of_your_metric', $value, $sampleRate = 1, array $tags = null);
 * DataDogStatsD::set('plesk.name_of_your_metric', $value, $sampleRate = 1, array $tags);
 * DataDogStatsD::increment('plesk.name_of_your_metric', $sampleRate = 1, array $tags = null);
 * DataDogStatsD::decrement('plesk.name_of_your_metric', $sampleRate = 1, array $tags = null);
 */
