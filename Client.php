<?php

class Client {

    private $base_url;

    private $responseResult;

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
        $json = curl_exec($curl);
        $jsonEncode = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP');

        $obj = json_decode($jsonEncode);
        $this->responseResult = $obj;

        return $this->responseResult;
    }
}



