<?php

namespace geoconding;

class Params {

    const RESULT_NOT_FOUND = 'not_found';
    /**
     * アプリケーションID
     */
    protected $appid = 'oshigoto';

    /**
     * 住所文字列
     */
    protected $query;

    /**
     * 入力検索文字列のエンコード形式
     */
    protected $ei;

    /**
     * 中心の緯度
     */
    protected $lat;

    /**
     * 中心の経度
     */
    protected $lon;

    /** 指定した緯度経度の測地系：
     * wgs - 世界測地系（デフォルト）
     * tky - 日本測地系
     */
    protected $datum = 'tky';

    /**
     * 住所コード（JIS X 0401）です。
     * 住所コードは都道府県（2桁）と市町村(5桁）を指定可能です。
     * ex) 北海道:01, 札幌市中央区:01101
     *
     */
    protected $ac;

    /**
     * 住所検索レベルです。arオプションと組み合わせて指定されたレベルの住所を検索します。
     * - 都道府県レベル (ex：東京都)
     * - 市区町村レベル (ex：東京都港区)
     * - 町、大字レベル (ex：東京都港区六本木)（デフォルト）
     * - 丁目、字レベル (ex：東京都港区六本木1丁目)
     *
     */
    protected $al;

    /**
     * 住所レベルの範囲です。alオプションと組み合わせて指定されたレベルの住所を検索します。
     * ge - 以上
     * le - 以下（デフォルト）
     * eq - 等しい
     *
     */
    protected $ar;

    /**
     * trueを指定すると、指定した住所レベルでマッチしなかった場合、上位のレベルで再検索を行います。
     *
     */
    protected $recursive = true;

    /**
     * 表示件数（デフォルト: 10、最大：100）。
     */
    protected $results;

    /**
     * 出力形式：
     * xml - XML形式（デフォルト）
     * json - JSON形式
     *
     */
    protected $output = 'json';

    private $config;

    public function id() {
        return $this->appid;
    }

    public function address($address) {
        $this->query = $address;
        return $this;
    }


    public function emptyResponse() {
        return [
            'lat' => 0,
            'lng' => 0,
            'output' => static::RESULT_NOT_FOUND,
        ];
    }
    public function getRequestPayload() {
        $this->config = $this->getParams();
        return $this;
    }

    protected function getParams()
    {
        $request = [
            'appid' => $this->id(),
            'query' => $this->address('東京都葛飾区堀切'),
            'ei' => '',
            'lat' => '',
            'lon' => '',
            'datum' => 'tky',
            'ac' => '',
            'al' => '',
            'ar' => '',
            'recursive' => true,
            'results' => true,
            'output' => 'json',
        ];
        return $request;
    }

}
