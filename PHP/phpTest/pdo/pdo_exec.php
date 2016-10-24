<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-7-14
 * Time: 下午8:46
 */

header('content-type:text/html;charset=utf-8');

try{
    $pdo = new PDO('mysql:host=localhost;dbname=pdo;','root','');
    //$sql = 'update user set username="xiongchao" where id = 1';
    $sql = "select * from user";
    $res = $pdo->exec($sql);
    echo $res."条记录被影响";
    echo "<hr/>";
    echo $pdo->lastInsertId();
    echo "<hr/>";
}catch(PDOException $e){
    echo $e->getMessage();
}