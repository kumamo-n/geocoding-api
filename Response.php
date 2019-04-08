<?php
namespace geoconding;

class Response {

    public $Id;

    public $Gid;

    public $Name;

    public $Geometry;


    public function __construct(array $params)
    {
        $result = $params['Feature'];
        foreach ($result as $key => $value) {
            $this->Id = $value['Id'];
            $this->Gid = $value['Gid'];
            $this->Name = $value['Name'];
            $this->Geometry = $value['Geometry'];
            $feature[] = $this;
        }
    }

    public function response() {}

}
