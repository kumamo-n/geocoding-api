<?php
namespace geoconding;

require_once 'Client.php';
require_once 'Params.php';

class Geocoding  {

    public function main() {
        $params = new Params('東京都葛飾区堀切');

        //if (empty($address)) {
        //    return $params->emptyResponse();
        //}
        $response = Client::request($params);
        echo $response;
    }
}

$result = new Geocoding();
$result->main();
