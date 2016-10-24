<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-27
 * Time: 下午9:46
 */

//session与cookie的运用
//cookie
$pwd = "xiongchao_cookie";
setcookie('pwd_cookie',$pwd,time()+60);//60秒后过期

var_dump($_COOKIE['pwd_cookie']);

echo "<br/>";


//session
//session_start();
$_SESSION['pwd_session'] = "xiongchao_session";
var_dump($_SESSION['pwd_session']);
//session_destroy();//销毁所有session变量(所有session变量销毁，包括文件)
echo "<br/>";
//var_dump($_SESSION['pwd_session']);