<?php
namespace geoconding;

require_once 'Client.php';
require_once 'Params.php';
require_once 'Response.php';
require_once 'Validate.php';

class Geocoding  {

    public function main() {
        // スクリプトで実行
        $input = getopt("f:");

        $params = new Params($input['f']);

        $response = Client::request($params);
        return $response;
    }
}

