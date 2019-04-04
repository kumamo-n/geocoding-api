<?php
require_once 'Client.php';


$post = new Client();

$response = $post->apiRequest([
    'appid' => 'oshigoto',
    'query' => '東京',
    'ei' => '',
    'lat' => '',
    'lon' => '',
    'datum' => 'tky',
    'ac' => '',
    'al' => '',
    'ar' => '',
    'recursive' => true,
    'results' => true,
    'output' => 'json',
]);
echo $response;
