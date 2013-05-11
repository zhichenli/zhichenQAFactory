<?php

// PUT
/*
$url = 'http://zhichen.server.p.cboo.st/api_devicelists/testListDelete5';
$data = array('devices' => '1,2,3,4,5,6,7,8,9,10,11,12', 'user_id' => '50fee18116ba47be1f00005a', 'user_signature' => '525827f13b37e99b3a0842bfb9bcf36184688528');

$options = array(
    'http' => array(
        'method'  => 'PUT',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo "Result:......\n";
var_dump($result);
*/


// POST
/*
$url = 'http://zhichen.server.p.cboo.st/api_devicelists/502e';
$data = array('devices' => 'x1, x2, x1, x2, x3, x4', 'user_id' => '50fee18116ba47be1f00005a', 'user_signature' => '525827f13b37e99b3a0842bfb9bcf36184688528');

$options = array(
    'http' => array(
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo "Result:......\n";
var_dump($result); 
*/

// DELETE
/*
$url = 'http://zhichen.server.p.cboo.st/api_devicelists/delete/502x';
$data = array('devices' => 'x1', 'user_id' => '50fee18116ba47be1f00005a', 'user_signature' => '525827f13b37e99b3a0842bfb9bcf36184688528');

$options = array(
    'http' => array(
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo "Result:......\n";
var_dump($result);
*/

$url = 'http://zhichen.server.p.cboo.st/api_devicelists/device/ifa111';
$data = array('device'=> 'ifa111', 'identifier'=> 'ifa','user_id' => '50fee18116ba47be1f00005a', 'user_signature' => '525827f13b37e99b3a0842bfb9bcf36184688528');

$options = array(
    'http' => array(
        'method'  => 'GET',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo "Result:......\n\n3";
var_dump($result);