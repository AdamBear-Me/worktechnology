<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 14-12-1
 * Time: 下午8:52
 */

namespace Common\Database;

use Common\DataBase;
use Common\IDatabase;

class PDO implements IDatabase
{
    protected $conn;
    function connect($host,$user,$passwd,$dbname)
    {
       $conn =  new  \PDO("msyql:host=$host;dbname=$dbname",$user,$passwd);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }

    function close()
    {
        unset($this->conn);
    }

}