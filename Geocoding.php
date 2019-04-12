<?php
namespace geocoding;

require_once 'Client.php';
require_once 'Params.php';
require_once 'Response.php';

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

        $params = new Params($input['f']);

        $response = Client::request($params);
        return $response;
    }
}

