<?php
namespace geoconding;

use \Exception;

class Response {

    public $id;

    public $gid;

    public $name;

    public $geometry;

    public $status;

    public $feature = [];

    public function __construct(array $params)
    {
        $this->status = $params['ResultInfo']['Status'];
        $result = $params['Feature'];
        foreach ($result as $key => $value) {
            $this->id = $value['Id'];
            $this->gid = $value['Gid'];
            $this->name = $value['Name'];
            $this->geometry = $value['Geometry'];
            $this->feature[] = $this;
        }
    }

    public function arrayResult(){
        return $this->feature;
    }

}
