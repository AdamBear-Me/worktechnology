<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-6-13
 * Time: 下午6:19
 */

//通过配置文件形式连接数据库


//在php.ini文件中添加pdo.dsn.xiongchao="mysql:host = localhost;dbname=demo"，然后重启服务器
try{
    $dsn  = "xiongchao";
    $username = "root";
    $passwd = "";
    $pdo = new PDO($dsn,$username,$passwd);
    var_dump($pdo);
}catch (PDOException $e){
    echo $e->getMessage();
}

