<?php

namespace geocoding;

class Request {

    const RESULT_NOT_FOUND = 'not_found';

    /**
     * アプリケーションID
     * @var string
     */
    public $appid = null;

    /**
     * 住所文字列
     * @var string
     */
    public $query;

    /**
     * 入力検索文字列のエンコード形式
     * @var string
     */
    public $ei;

    /**
     * 中心の緯度
     * @var float
     */
    public $lat;

    /**
     * 中心の経度
     * @var float
     */
    public $lon;

    /** 指定した緯度経度の測地系：
     * wgs - 世界測地系（デフォルト）
     * tky - 日本測地系
     * @var string
     */
    public $datum = 'wgs';

    /**
     * 住所コード（JIS X 0401）です。
     * 住所コードは都道府県（2桁）と市町村(5桁）を指定可能です。
     * ex) 北海道:01, 札幌市中央区:01101
     * @var string
     */
    public $ac;

    /**
     * 住所検索レベルです。arオプションと組み合わせて指定されたレベルの住所を検索します。
     * - 都道府県レベル (ex：東京都)
     * - 市区町村レベル (ex：東京都港区)
     * - 町、大字レベル (ex：東京都港区六本木)（デフォルト）
     * - 丁目、字レベル (ex：東京都港区六本木1丁目)
     * @var string
     */
    public $al;

    /**
     * 住所レベルの範囲です。alオプションと組み合わせて指定されたレベルの住所を検索します。
     * ge - 以上
     * le - 以下（デフォルト）
     * eq - 等しい
     * @var int
     *
     */
    public $ar;

    /**
     * trueを指定すると、指定した住所レベルでマッチしなかった場合、上位のレベルで再検索を行います。
     * @var string
     *
     */
    public $recursive = true;

    /**
     * 表示件数（デフォルト: 10、最大：100）。
     * @var boolean
     */
    public $results;

    /**
     * 出力形式：
     * xml - XML形式（デフォルト）
     * json - JSON形式
     * @var string
     * @deprecated  'json' 固定です
     *
     */
    public $output;

    public function __construct($query)
    {
        $this->query = $query;
    }
}
