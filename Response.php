<?php
namespace geocoding\Response;

require_once 'Response/ResultInfo.php';
require_once 'Response/Feature.php';

use geocoding\Response\ResultInfo\ResultInfo;
use geocoding\Response\Feature\Feature;

class Response
{
    /**
     * @var ResultInfo
     */
    public $result;

    /**
     * @var Feature[]
     */
    public $feature = [];

    public function __construct( array $params = [])
    {
        // レスポンスまとめオブジェクトを作成
        $this->result = new ResultInfo( isset( $params['ResultInfo'] ) ? $params['ResultInfo'] : [] );

        // 結果情報を保存
        if ( isset( $params['Feature'] ) && is_array( $params['Feature'] ) ) {
            foreach ( $params['Feature'] as $feature ) {
                $this->feature[] = new Feature( $feature );
            }
        }
    }
}

