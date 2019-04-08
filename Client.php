<?php
namespace  geoconding;
require_once 'Params.php';
require_once 'Response.php';

class Client extends Params {

    private $base_url;

    private $result;

    public function __construct($base_url = 'https://map.yahooapis.jp/geocode/V1/geoCoder')
    {
        $this->base_url = $base_url;
    }


    public function request($params) {
        $curl = curl_init();
        $param = http_build_query($params);
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->base_url.'?'.$param,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ]);
        $json = curl_exec($curl);


        $jsonEncode = $this->encode($json);

        $obj = json_decode($jsonEncode,true);
        $response = new Response($obj);

        $result = $response->response();
        return $result;
    }

    protected function encode($json) {
        $jsonEncode = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP');
        return $jsonEncode;
    }

    protected function resultResponse($result){
        $this->result = $result;
        return $this->result;
    }

}



