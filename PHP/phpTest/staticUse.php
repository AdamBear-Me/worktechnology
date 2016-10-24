<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-22
 * Time: 下午3:50
 *
 * static的使用
 */


class Myclass{
    static $count;  //声明静态成员，用来统计对象被创建的次数

    function __construct(){
        self::$count++;  //在类内容的成员方法中访问静态成员，使用self的形式访问
    }

    static function getCount(){
        return self::$count;  //在静态方法中只能访问静态成员
    }
}

$myc1 = new Myclass();
$myc2 = new Myclass();
$myc3 = new Myclass();

echo Myclass::getCount();  //使用类名访问类中静态成员方法,同样也可以使用类名访问静态成员属性
echo "<br/>";
echo $myc3->getCount(); //使用对象引用访问类中的静态方法