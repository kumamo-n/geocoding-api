<?php
namespace  geoconding;
require_once 'Params.php';
require_once 'Response.php';

class Client extends Response {

    const BASE_URL = 'https://map.yahooapis.jp/geocode/V1/geoCoder';

    public static function request($params) {
        $curl = curl_init();
        $param = http_build_query($params);
        curl_setopt_array($curl, [
            CURLOPT_URL => self::BASE_URL.'?'.$param,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ]);
        $json = curl_exec($curl);

        $obj = json_decode($json,true);

        $response = new Response($obj);

        return $response->arrayResult();
    }
}



