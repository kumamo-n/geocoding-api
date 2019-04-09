<?php
namespace geoconding;

use \Exception;

class Response {

    public $id;

    public $gid;

    public $name;

    public $geometry;

    public $status;

    public $error;

    static public $feature;

    public function __construct(array $params)
    {
        if ($params['Error']) {
            $this->error = $params['Error']['Message'];
            throw new Exception($this->error);
        } else if(!array_key_exists('Feature', $params)) {
            $this->error = '該当する住所は見つかりませんでした';
            throw new Exception($this->error);
        }

        $this->status = $params['ResultInfo']['Status'];
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
