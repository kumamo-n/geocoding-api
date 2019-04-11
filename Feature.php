<?php
namespace geoconding;

require_once 'Geometry.php';

class Feature {

    /**
     * @var int[]
     */
    public $id;

    /**
     * @var int[]
     */
    public $gid;

    /**
     * @var string
     */
    public $name;

    /**
     * @var array
     */
    public $geometry;

    public function __construct(array $params =[])
    {
            $this->id  = $params['Id'] ?: 0;
            $this->gid  = $params['Gid'] ?: 0;
            $this->name  = $params['Name'] ?: '';
            $this->geometry = $params['Geometry'] ? new Geometry($params['Geometry']) : array();
    }
}
