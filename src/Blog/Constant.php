<?php
namespace Pictree\Blog;

class Constant
{
    const CONTROY_NAME = '中国';

    public static function controyName()
    {
        echo self::CONTROY_NAME, PHP_EOL;
//        return self::CONTROY_NAME;
    }
}
