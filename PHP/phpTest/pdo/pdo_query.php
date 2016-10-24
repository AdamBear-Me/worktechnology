<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-7-14
 * Time: 下午9:15
 */

header('content-type:text/html;charset=utf-8');

try{
    $pdo = new PDO('mysql:host=localhost;dbname=pdo;','root','');
    $sql = 'select * from user where id = 1';
    $res = $pdo->query($sql);
    var_dump($res);
    foreach($res as $as){  //输出查询的结果
        print_r($as);
        echo "<br/>";

    }
}catch(PDOException $e){
    echo $e->getMessage();
}