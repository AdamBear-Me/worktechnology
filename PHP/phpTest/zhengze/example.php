<?php
/**
 * Created by PhpStorm.
 * User: Lianky
 * Date: 2015/9/7
 * Time: 10:37
 */

//匹配手机
function preg_tel($test){

    $rule = "/^((13[4-9])|147|(15[0-35-9])|180|182|183|(18[5-9]))[0-9]{8}$/";

    $preg = preg_match($rule,$test);
    return $preg;
}

//匹配邮箱 格式：******@**.**
function preg_mail($test){

    $rule = '/^[a-zA-Z0-9][a-zA-Z0-9._-]*\@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/';

    $res = preg_match($rule,$test);

    return $res;
}
//匹配身份证号
function preg_ID($test){

    $rule = '/^(([0-9]{15})|([0-9]{18})|([0-9]{17}x))$/';

    $res = preg_match($rule,$test);

    return $res;
}
if(preg_mail("changjiangxc@163.com")){
    echo "匹配成功";
}else{
    echo "匹配失败";
}

$url = "<a href='http://www.sina.com.cn'>sina</a>";

$start = strpos($url,'=')+2;
$end = strpos($url,'>')-1;

$res = substr($url,$start,$end-$start);

echo $res;
$rule = '/^http:\/\/www.sina.com.cn$/';
$asd = preg_match($rule,$url,$result);

echo $asd;
