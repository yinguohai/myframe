<?php
/**
 * Created by PhpStorm.
 * User: bluesky
 * Date: 2019/1/26
 * Time: 11:41
 */

namespace core;


class Bootstrap
{
    public static function run()
    {
        self::parserUrl();
    }

    public static function parserUrl()
    {
        if (isset($_GET['r'])) {
            $pathInfo = explode('/', $_GET);
            $class = '\controller\\'.ucfirst($pathInfo[0]);
            $action = $pathInfo[1];
        } else {
            $class = '\controller\Index';
            $action = 'show';
        }
        echo (new $class())->$action();
    }
}