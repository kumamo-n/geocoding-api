<?php
namespace geoconding;

class Feature  {

    public $feature = [];

    public function setFeature($value) {
        $this->feature[] = $value;
    }
}
