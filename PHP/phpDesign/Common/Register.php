<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-24
 * Time: 下午12:10
 */
//注册器模式
namespace Common;

class Register
{
    protected static $objects;
    static function set($alias,$object)
    {
        self::$objects[$alias] = $object;
    }

    static function get($name)
    {
        return self::$objects[$name];
    }

    function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}