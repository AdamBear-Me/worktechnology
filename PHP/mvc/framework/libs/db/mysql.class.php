<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-21
 * Time: 下午10:16
 */

class mysql{
    //报错函数
    function err($error){
        die("操作有误，错误原因为：".$error);
    }

    //数据库连接函数   $config是配置数组 array($dbhost,$dbuser,$dbpwd,$dbname,$dbcharset)
    function connect($config){
       // extract($config);
        if(!($con = mysql_connect($config['dbhost'],$config['dbuser'],$config['dbpwd']))){
            $this->err(mysql_error());
        }

        if(!mysql_select_db($config['dbname'],$con)){
            $this->err(mysql_error());
        }

        mysql_query("set names ".$config['dbcharset']);
    }

    //执行sql语句
    function query($sql){
        if(!($query = mysql_query($sql))){
            $this->err($sql."<br/>".mysql_error());
        }else{
            return $query;
        }
    }

    function findOne($query){
        $rs = mysql_fetch_array($query,MYSQL_ASSOC);
        return $rs;
    }
    function findAll($query){
        while($rs = mysql_fetch_array($query,MYSQL_ASSOC)){
            $list[]=$rs;
        }
        return isset($list)?$list:"";  //返回数组
    }

    //返回指定行指定字段的值
    function findResult($query,$row=0,$field=0){
        $rs = mysql_result($query,$row,$field);
        return $rs;
    }


    //添加
    //$table 表名
    //$arr  数组（包含字段和值的一维数组）
    function insert($table,$arr){
        foreach($arr as $key=>$value){
            $value = mysql_real_escape_string($value);
            $keyArr[] = "`".$key."`";
            $valueArr[] = "'".$value."'";
        }

        $keys = implode(",",$keyArr);
        $values = implode(",",$valueArr);
        $sql = "insert into ".$table."(".$keys.") values(".$values.")";

        $this->query($sql);
        return mysql_insert_id();
    }

    //修改
    function update($table,$arr,$where){
        foreach($arr as $key=>$value){
            $value = mysql_real_escape_string($value);  //对value中需要转义的字符转义化
            $keyandvalue[] = "`".$key."`='".$value."'";
        }

        $keyandvalue = implode(",",$keyandvalue);
        $sql = "update ".$table." set ".$keyandvalue." where ".$where;
        $this->query($sql);
    }

    //删除
    function del($table,$where){
        $sql = "delete from ".$table." where ".$where;
        $this->query($sql);
    }

}