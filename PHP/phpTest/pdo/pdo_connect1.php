<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-6-13
 * Time: 下午6:03
 */
//通过参数形式连接数据库


try{
    $dsn = "mysql:host = localhost;dbname=demo";
    $username = "root";
    $passwd = "";
    $pdo = new PDO($dsn,$username,$passwd);
    var_dump($pdo);
}catch(PDOException $e){
    echo $e->getMessage();
}
