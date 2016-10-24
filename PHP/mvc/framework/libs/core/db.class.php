<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-22
 * Time: 下午3:45
 */

class DB{ //下面的成员属性和方法之所以设置成静态的，是在整个系统中可以直接DB::静态成员属性或DB::静态成员方法

    public static $db;

    public static function init($dbtype,$config){
        self::$db = new $dbtype();
        self::$db->connect($config);
    }

    public static function query($sql){
        return self::$db->query($sql);
    }

    public  static function findAll($sql){
        $query = self::$db->query($sql);
        return self::$db->findAll($query);
    }

    public static function findOne($sql){
        $query = self::$db->query($sql);
        return self::$db->findOne($query);
    }

    public static function findResult($sql,$row,$field){
        $query = self::$db->query($sql);
        return self::$db->findResult($query,$row,$field);
    }

    public static function insert($table,$arr){
        return self::$db->insert($table,$arr);
    }

    public static function update($table,$arr,$where){
        return self::$db->update($table,$arr,$where);
    }

    public static function del($table,$where){
        return self::$db->del($table,$where);
    }
}