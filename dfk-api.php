<?php

include('Requests/library/Requests.php');
Requests::register_autoloader();
$headers = array(
    'Content-Type' => 'application/json'
);
$url = 'https://dataflowkit.com/';
$data = '{"url":"' . $url . '","type": "chrome","waitDelay": 0.5}';
$response = Requests::post('https://api.dataflowkit.com/v1/fetch?api_key=API-KEY', $headers, $data);
var_dump($response->body);
?>
