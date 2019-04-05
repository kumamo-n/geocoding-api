<?php
require_once 'Client.php';
require_once 'Params.php';

class Geocoding {

    public function main() {
        $post = new Client();
        $params = new Params();

        //if (empty($address)) {
        //    return $params->emptyResponse();
        //}
        $response = $post->apiRequest($params->getRequestPayload());
        echo $response;
    }
}

$result = new Geocoding();
$result->main();
