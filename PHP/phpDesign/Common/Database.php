<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 14-11-30
 * Time: 下午4:08
 */
namespace Common;

interface IDatabase
{
    function connect($host,$user,$passwd,$dbname);
    function query($sql);
    function close();
}

class DataBase
{
    protected $db;
    private function __construct()
    {

    }

    static function getInstance()
    {
        if(self::$db){
            return self::$db;
        }else{
            self::$db = new self();
            return self::$db;
        }
    }
    function where($where)
    {
        return $this;
    }

    function order($order)
    {
        return $this;
    }

    function limit($limit)
    {
        return $this;
    }
}