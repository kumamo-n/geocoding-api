<?php
require_once 'Client.php';

class Geocoding {
    public function main() {
        $address = $_POST['address'];
        $post = new Client();

        $response = $post->apiRequest([
            'appid' => 'oshigoto',
            'query' => $address,
            'ei' => '',
            'lat' => '',
            'lon' => '',
            'datum' => 'tky',
            'ac' => '',
            'al' => '',
            'ar' => '',
            'recursive' => true,
            'results' => true,
            'output' => 'xml',
        ]);
        echo $response;
    }
}

$result = new Geocoding();
$result->main();
