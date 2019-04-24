<?php
namespace geocoding\ApiResponseExceptions;

class ApiResponseExceptions extends \Exception {

    public static function exception($msg){
        return new static($msg);
    }
}
