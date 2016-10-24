<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-7-14
 * Time: 下午10:39
 */

header('content-type:text/html;charset=utf-8');
try{
    $dsn  = "mysql:host=localhost;dbname=pdo";
    $username = "root";
    $passwd = "";
    $pdo = new PDO($dsn,$username,$passwd);
    echo "自动提交".$pdo->getAttribute(PDO::ATTR_AUTOCOMMIT);
    echo "<br/>";
    echo "默认的错误处理模式".$pdo->getAttribute(PDO::ATTR_ERRMODE);
    $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,0);//设置自动提交的属性
    echo "<br/>";
    echo "自动提交".$pdo->getAttribute(PDO::ATTR_AUTOCOMMIT);

}catch (PDOException $e){
    echo $e->getMessage();
}