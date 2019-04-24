<?php
namespace geocoding\Response;

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
     * @var Geometry
     */
    public $geometry;

    public function __construct(array $params =[])
    {
            $this->id  = (int)$params['Id'] ?: 0;
            $this->gid  = (int)$params['Gid'] ?: 0;
            $this->name  = (string)$params['Name'] ?: '';
            $this->geometry = $params['Geometry'] ? new Geometry($params['Geometry']) : new Geometry([]);
    }
}
