<?php
namespace geoconding;

class Geometry
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var array
     */
    public $coordinate;

    /**
     * @var array
     */
    public $BoundingBox;

    public function __construct(array $params = [])
    {
        $this->type = (string)$params['Type'] ?: '';
        $this->coordinate = (string)$params['Coordinates'] ? explode(',',$params['Coordinates']): [];
        $this->BoundingBox = (array)$params['BoundingBox'] ? explode(',', $params['BoundingBox']) :[];
    }
}
