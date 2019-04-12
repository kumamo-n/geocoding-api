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
        $this->coordinate = $params['Coordinates'] ? explode(',',$params['Coordinates']): [];
        $this->BoundingBox = $params['BoundingBox'] ? (array)$this->BoundingBox($params['BoundingBox']) :[];
    }

    /**
     * @return array
     */
    private function BoundingBox($params){
        $toArray = [];
        if (!empty($params)){
            foreach (explode(" ", $params) as $boundingBox) {
                $toArray[] = $boundingBox;
            }
        }
        return $toArray;

    }

}
