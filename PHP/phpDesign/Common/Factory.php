<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 14-11-30
 * Time: 下午6:10
 */
namespace Common;
class Factory
{
    static function createDatabase()
    {
       //$db = new \Common\DataBase();
       $db = DataBase::getInstance();
       Register::set('db2',$db);
       return $db;
    }
}