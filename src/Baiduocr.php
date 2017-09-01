<?php
namespace Keshunchen\Baiduocr;

class Baiduocr extends \AipOcr
{
    public function __construct()
    {
        $appId = config('baiduocr.APP_ID');
        $apiKey = config('baiduocr.API_KEY');
        $secretKey = config('baiduocr.SECRET_KEY');

        parent::__construct($appId, $apiKey, $secretKey);
    }
}