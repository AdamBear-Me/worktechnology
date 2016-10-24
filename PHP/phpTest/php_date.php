<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-7-15
 * Time: 下午8:16
 */
date_default_timezone_set('PRC');
echo time();
echo "<br/>";
echo date("Y-m-d H:i:s",time()-3600*24);
echo "<br/>";
echo date("Y-m-d H:i:s",strtotime("-1 day"));
echo "<br/>";
echo date("Y-m-d H:i:s",strtotime("15 July 2015"));
echo "<br/>";
echo date("Y-m-d H:i:s",filemtime("./php_array.php"));

var_dump(getdate());

echo "<br/>";
$datetime = new DateTime('2008-08-03 14:52:10');
echo mktime(0,0,0,7,15,2015);