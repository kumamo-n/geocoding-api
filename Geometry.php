<?php
namespace geoconding;

class Geometry
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int[]
     */
    public $coordinate;

    /**
     * @var int[]
     */
    public $BoundingBox;

    public function __construct(array $params = [])
    {
        $this->type = $params['Type'];
        $this->coordinate = $params['Coordinates'];
        $this->BoundingBox = $params['BoundingBox'];
    }
}
