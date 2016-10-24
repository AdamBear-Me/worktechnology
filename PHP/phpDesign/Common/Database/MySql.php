<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 14-12-1
 * Time: 下午8:52
 */

namespace Common\Database;

use Common\IDatabase;

class MySql implements IDatabase
{
    protected $conn;
    function connect($host,$user,$passwd,$dbname)
    {
        $conn =  mysql_connect($host,$user,$passwd,$dbname);
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $res = mysql_query($sql);
        return $res;
    }

    function close()
    {
        mysql_close($this->conn);
    }
}