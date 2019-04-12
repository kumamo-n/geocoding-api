<?php
namespace geoconding;

require_once 'Geometry.php';

class Feature {

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $gid;

    /**
     * @var string
     */
    public $name;

    /**
     * @var object
     */
    public $geometry;

    public function __construct(array $params =[])
    {
            $this->id  = (int)$params['Id'] ?: 0;
            $this->gid  = (int)$params['Gid'] ?: 0;
            $this->name  = (string)$params['Name'] ?: '';
            $this->geometry = $params['Geometry'] ? (object)new Geometry($params['Geometry']) : (object)new Geometry([]);
    }
}
