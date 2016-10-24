<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-6-13
 * Time: 下午6:09
 */

//通过URL形式连接数据库


try{
    $dsn  = "uri:file://D:\Program Files\wamp\www\TestWorkSpace\phpTest\pdo\dsn.txt";
    $username = "root";
    $passwd = "";
    $pdo = new PDO($dsn,$username,$passwd);
    var_dump($pdo);
}catch (PDOException $e){
    echo $e->getMessage();
}

