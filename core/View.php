<?php
/**
 * Created by PhpStorm.
 * User: bluesky
 * Date: 2019/1/26
 * Time: 11:54
 */

namespace core;


class View
{
    protected $files;
    protected $vars;

    /**
     * 加载视图文件
     * @param $file
     * @return $this
     */
    public function make($file)
    {
        $this->files = 'view/'.$file.'.html';
        return $this;
    }

    /**
     * 分配视图变量
     * @param $key
     * @param $value
     * @return $this
     */
    public function assign($key, $value)
    {
        $this->vars[$key] = $value;
        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        #分配变量方法
        extract($this->vars);

        #默认输出模板文件
        include $this->files;
        return '';
    }
}