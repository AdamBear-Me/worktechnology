<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 14-11-29
 * Time: 下午10:37
 */
namespace Common;

class Object
{
    /*static  function  test()
    {

    }*/
    protected $array = array();
    //魔术方法
    function __set($key,$value)
    {
        var_dump(__METHOD__);
        $this->array[$key] = $value;
    }

    function __get($key)
    {
        var_dump(__METHOD__);
        return $this->array[$key];
    }

    function __call($func,$param)
    {
        var_dump($func,$param);
        return "magic function __call";
    }

    static function __callStatic($func,$param)
    {
        var_dump($func,$param);
        return "magic static function __callStatic\n";
    }

    function __toString()
    {
        return "__toString";
    }

    function __invoke($param)
    {
        var_dump($param);
        return "__invoke";
    }

}