<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-23
 * Time: 下午8:35
 */
/*spl_autoload_register('my_autoload');//这个函数可以代替_autoload(),参数是自动加载类方法的名称
function my_autoload($class)
{
    require __DIR__.'/'.$class.'.php';
}*/

//声明一个自动加载类的魔术方法__autoload(),作用：自动加载类文件
//当尝试使用一个当前php文件没有组织到的类时，它会寻找一个__autoload()的全局函数，并将类名作为__autoload()的参数,在__autoload()自动加载这个类
//
function _autoload($class)
{
    require __DIR__.'/'.$class.'.php';
}

test1::test();//调用test1类中的test()方法
echo "<br/>";
test2::test();