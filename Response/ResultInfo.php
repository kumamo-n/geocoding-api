<?php
namespace geocoding\Response;


class ResultInfo
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $start;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $copyright;

    /**
     * @var float
     */
    public $latency;

    public function __construct(array $params = [])
    {
        $this->count       = isset( $params['Count'] ) ? (int) $params['Count'] : 0;
        $this->total       = isset( $params['Total'] ) ? (int) $params['Total'] : 0;
        $this->start       = isset( $params['Start'] ) ? (int) $params['Start'] : 0;
        $this->status      = isset( $params['Status'] ) ? (int) $params['Status'] : 0;
        $this->description = isset( $params['Description'] ) ? (string) $params['Description'] : '';
        $this->copyright   = isset( $params['Copyright'] ) ? (string) $params['Copyright'] : '';
// 省略
    }
}
