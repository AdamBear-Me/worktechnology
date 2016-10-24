<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 14-11-29
 * Time: 下午10:42
 */

namespace Common;

class Loader
{
    static function autoload($class)
    {
        require BASEDIR.'/'.str_replace('\\','/',$class).'.php';
    }
}