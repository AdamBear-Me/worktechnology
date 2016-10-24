<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-23
 * Time: 下午10:03
 */
namespace Common;

class Loader
{
    //自动载入所有的类
    static function autoload($class)
    {
        require BASEDIR.'/'.$class.'.php';
    }
}