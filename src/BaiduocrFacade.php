<?php
namespace Keshunchen\Baiduocr;

use Illuminate\Support\Facades\Facade;

class BaiduocrFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'baiduocr';
    }
}