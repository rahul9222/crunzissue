<?php

use Crunz\Schedule;

include_once(__DIR__ . DIRECTORY_SEPARATOR . 'CRON_SITE_URL.php');

$schedule = new Schedule();

foreach ($SITE_URL as $key => $value) {
    $schedule->run('/usr/bin/curl '.$http.$value.'/admin/test.php')
        ->cron('*/5 * * * *')
        ->preventOverlapping()
        ->description('TwoTasks Test for '.$key);
}

return $schedule;
