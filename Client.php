<?php

class Client {

    private $base_url;

    public function __construct($base_url = 'https://map.yahooapis.jp/geocode/V1/geoCoder')
    {
        $this->base_url = $base_url;
    }

    public function apiRequest($params =[]) {
        $curl = curl_init();
        $param = http_build_query($params);
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->base_url.'?'.$param,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ]);
        $response = json_encode(curl_exec($curl));

        curl_close($curl);
        return $response;
    }
}



