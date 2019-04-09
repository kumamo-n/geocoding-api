<?php
namespace geoconding;
require_once 'Geocoding.php';

$result = new Geocoding();

//　呼び出し
foreach ($result->main() as $value) {
    echo $value->id;
    echo $value->gid;
    echo $value->name;
    echo $value->geometry;
}


