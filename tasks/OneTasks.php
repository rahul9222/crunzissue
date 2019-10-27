<?php

use Crunz\Schedule;

include_once('CRON_SITE_URL.php');

$schedule = new Schedule();

foreach ($SITE_URL as $key => $value) {
	$schedule->run('/usr/bin/curl '.$http.$value.'/admin/test.php')
		->cron('*/10 * * * *')
		->preventOverlapping()
		->description('OneTasks Test for '.$key);
}

return $schedule;
