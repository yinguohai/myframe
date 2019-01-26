<?php
/**
 * Created by PhpStorm.
 * User: bluesky
 * Date: 2019/1/26
 * Time: 11:48
 */
function pp($param,$isEnd=true)
{
    echo "<pre/><h3>";
    print_r($param);

    if ($isEnd) {
        exit;
    }
}