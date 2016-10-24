<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 14-11-30
 * Time: 下午6:33
 */
//注册树模式
namespace Common;

class Register
{
    protected static $object;
    static function set($alias,$object)
    {
        self::$object[$alias] = $object;
    }
    static function get($name)
    {
        return self::$object[$name];
    }
    function _unset($alias)
    {
        unset(self::$object[$alias]);
    }
}