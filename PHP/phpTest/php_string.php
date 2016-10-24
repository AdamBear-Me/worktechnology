<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-7-16
 * Time: 下午4:16
 */

//php字符串处理

$str = "1234567890";
function asd($str){
    $str = strrev($str);
    $str = chunk_split($str,3,',');
    $str = strrev($str);
    $str = substr($str,1);
    echo $str;
}

asd($str);
echo "<br/>";
//echo ltrim($str,"0");
$china = "悄悄是别离的笙箫";
var_dump(array_reverse(preg_split("//u",$china))) ;
echo implode('',array_reverse(preg_split("//u",$china)));
echo "<br/>";
echo str_replace("6","","1234567890");
echo "<br/>";

$baidu = "www.baidu.com";

echo strrev(str_replace("www","",$baidu));

echo "<br/>";


echo round(3.1415926,2);
