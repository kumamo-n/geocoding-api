<?php
namespace geoconding;

class ApiResponseExceptions extends \Exception {

    public static function notConnect($msg){
        return new static($msg);
    }

    public static function timeout($msg){
        return new static($msg);
    }
    public static function serverError($msg){
        return new static($msg);
    }
}
