<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-7-14
 * Time: 下午9:07
 */

header('content-type:text/html;charset=utf-8');

try{
    $pdo = new PDO('mysql:host=localhost;dbname=pdo;','root','');
    $sql = 'update users set username="xiongchao" where id = 1';
    $res = $pdo->exec($sql);
    if($res===false){
        echo $pdo->errorCode(); //获取错误码
        echo "<br/>";
        var_dump($pdo->errorInfo()) ;  //获取错误信息
    }
}catch(PDOException $e){
    echo $e->getMessage();
}