<?php
namespace geocoding\Response\Feature;

require_once 'Geometry.php';

use geocoding\Response\Geometry\Geometry;

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
            $this->geometry = $params['Geometry'] ? (object)new Geometry($params['Geometry']) : (object)new Geometry([]);
    }
}
