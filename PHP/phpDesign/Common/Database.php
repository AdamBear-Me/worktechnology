<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-24
 * Time: 上午10:19
 */
namespace Common;

class Database
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

    //使用链式操作时，方法返回的必须是$this
    public function where()
    {
        return $this;
    }

    public function order()
    {
        return $this;
    }

    public function limit()
    {
        return $this;
    }
}