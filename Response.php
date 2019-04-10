<?php
namespace geoconding;

require_once 'Feature.php';

class Response  extends Feature {

    public $id;

    public $gid;

    public $name;

    public $geometry;

    public $status;

    public function __construct(array $params)
    {
        $this->status = $params['ResultInfo']['Status'];
        $result = $params['Feature'];
        $feature = new Feature();
        foreach ($result as $key => $value) {
            $this->id  = $value['Id'];
            $this->gid  = $value['Gid'];
            $this->name  = $value['Name'];
            $this->geometry = $value['Geometry'];
            $feature->setFeature($this);
        }
    }

}
