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

class MySqli implements IDatabase
{
    protected $conn;
    function connect($host,$user,$passwd,$dbname)
    {
        $conn = mysqli_connect($host,$user,$passwd,$dbname);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return mysqli_query($this->conn,$sql);
    }

    function close()
    {
        mysqli_close($this->conn);
    }
}