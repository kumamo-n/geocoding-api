<?php
namespace geoconding;

class Response {

    public $id;

    public $gid;

    public $name;

    public $geometry;

    static public $feature;

    public function __construct(array $params)
    {
        $result = $params['Feature'];
        foreach ($result as $key => $value) {
            $this->id = $value['Id'];
            $this->gid = $value['Gid'];
            $this->name = $value['Name'];
            $this->geometry = $value['Geometry'];
            self::$feature[] = $this;
        }
    }

    public function arrayResult(){
        return self::$feature;
    }

}
