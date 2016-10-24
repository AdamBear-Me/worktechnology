<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-24
 * Time: 上午10:26
 */
//php魔术方法的练习
/*1、__get/__set：对对象属性的接管
2、__call/__callStatic：控制php对象方法的使用
3、__toString：将php对象转换成字符串
4、__invoke：将一个php对象当成函数来执行时来回调这个方法*/

class Object
{
    protected $array = array();
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
        return "magic mathod __call";
    }

    static function __callStatic($func,$param)
    {
        var_dump($func,$param);
        return "magic mathod __callStatic";
    }

    function __toString()
    {
        return "__toString";
    }

    function __invoke($param)
    {
        var_dump($param);
        return "invoke";
    }
}


$Obj = new Object();
$Obj->title = "你好";//当对一个对象不存在的属性赋值的时候，它就会自动调用__set方法
echo $Obj->title;//对去读取一个对象不存在的属性的时候，它就会自动调用__get方法

echo $Obj->test("hello","123");  //当调用一个对象不存在的方法时，就会自动调用__call方法
echo $Obj::test1("hello1","1234"); //当调用一个对象不存在的静态方法时，就会自动调用__callStatic方法
echo "<br/>";

echo $Obj;//当直接输出一个对象时（因为对象不能直接输出），就会自动调用__toString方法把对象转换成字符串
echo "<br/>";

echo $Obj("hello");//当将一个对象当成一个函数来使用的时候，就会自动调用__invoke方法