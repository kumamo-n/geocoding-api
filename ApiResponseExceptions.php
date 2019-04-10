<?php
namespace geoconding;

class ApiResponseExceptions extends \Exception {

    public static function notConnect(){
        return new static('Not connect to map.yahooapis.jp/');
    }
}
