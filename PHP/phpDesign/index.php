<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-23
 * Time: 下午9:57
 */

define("BASEDIR",__DIR__);

include  BASEDIR."/Common/Loader.php";
spl_autoload_register("\\Common\\Loader::autoload");

/*Common\Object::test();
App\Controller\Home\Index::test();*/

/*$db = new Common\Database();
$db->where("id = 3")->order("id desc")->limit(10);//链式操作*/

/*$db = \Common\Factory::createDataBase();//使用工厂模式生成对象*/

$db = Common\Database::getInstance();
$db = Common\Database::getInstance();
$db = Common\Database::getInstance();

$db = Common\Register::get("db1");//直接使用注册器模式调用对象db1

