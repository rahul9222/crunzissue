<?php

if (getenv('CRON') == 'false') {
    // exit();
}

$SITE_URL = array();
$http = 'http://';

// if (getenv('ENV') == 'production') {
    $http = 'https://';
    $SITE_URL = array(
        'Test 1' => 'test1.google.com',
        'Test 2' => 'test2.google.com',
    );
// }

var_dump($SITE_URL, $http);