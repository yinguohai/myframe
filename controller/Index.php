<?php
/**
 * Created by PhpStorm.
 * User: bluesky
 * Date: 2019/1/26
 * Time: 11:49
 */

namespace controller;


use core\View;

class Index
{
    public function __construct()
    {
        $this->view = new View();
    }

    public function show()
    {
        return $this->view->make('index')->assign('name','bilibili');
    }

}