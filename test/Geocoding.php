<?php
namespace geocoding\test;

require_once 't Client.php';
require_once 'Request.php';
require_once 'Response.php';

use geocoding\Request;
use geocoding\Response;
use geocoding\Client;

class Geocoding  {

    /*
     * @return object
     */
    public function main() {
        // スクリプトで実行
        $input = getopt("f:");

        if (empty($input['f'])) {
            return new Response();
        }

        $params = new Request($input['f']);

        $response = Client::request($params);
        return $response;
    }
}

