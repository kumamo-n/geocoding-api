<?php
namespace  geoconding;
use function PHPSTORM_META\elementType;

require_once 'Params.php';
require_once 'Response.php';
require_once 'ApiResponseExceptions.php';

class Client extends Response {

    const BASE_URL = 'https://map.yahooapis.jp/geocode/V1/geoCoder';
    const TEST_URL = 'http://localhost:8888/';

    public static function request($params) {
        $curl = curl_init();
        $param = http_build_query($params);
        curl_setopt_array($curl, [
            CURLOPT_URL => self::TEST_URL.'?'.$param,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_CONNECTTIMEOUT => 1,
            CURLOPT_TIMEOUT => 5,
            CURLOPT_FAILONERROR => true,
        ]);

        $json = curl_exec($curl);
        $error = curl_errno($curl);
        $errMsg = curl_error($curl);

        // 例外処理
        if ($error === 6) {
            throw ApiResponseExceptions::notConnect($errMsg);
        } else if($error === 28) {
            throw ApiResponseExceptions::timeout($errMsg);
        } else if ($error === 22) {
            throw ApiResponseExceptions::serverError($errMsg);
        }

        $obj = json_decode($json,true);

        $response = new Response($obj);
        return $response;
    }
}



