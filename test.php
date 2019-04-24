<?php
namespace geocoding;
require_once 'test/Geocoding.php';

use geocoding\test\Geocoding;


$result = new Geocoding();

//　呼び出し
var_dump($result->main());
exit;
foreach ($result->main()->feature as $value) {
    echo $value->id;
    echo $value->gid;
    echo $value->name;
    echo $value->geometry;
}


