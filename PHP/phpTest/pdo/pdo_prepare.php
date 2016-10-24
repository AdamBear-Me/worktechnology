<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-7-14
 * Time: 下午10:07
 */

header('content-type:text/html;charset=utf-8');

try{
    $pdo = new PDO('mysql:host=localhost;dbname=pdo;','root','');
    $sql = 'select * from user';
    $stmt = $pdo->prepare($sql);
    $res = $stmt->execute();
    var_dump($res);
    if($res){
        while($re = $stmt->fetch()){
            print_r($re);
            echo '<hr/>';
        }
    }

}catch(PDOException $e){
    echo $e->getMessage();
}