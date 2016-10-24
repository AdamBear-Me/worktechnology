<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-24
 * Time: 上午11:07
 */
namespace Common;
//工厂模式
class Factory
{
    //如果在一个项目中很多处都使用这个对象，假如忽然要改变这个对象的名字，使用工厂模式只需要在工厂类方法中修改对象名字即可，
    //否则就要在项目中一个一个修改对象的名字了
    static function createDataBase()
    {
        $db = Database::getInstance();
        Register::set("db1",$db);
        return $db;
    }
}