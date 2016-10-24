<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-26
 * Time: 下午7:59
 */

$pattern = '/[0-9]/';//正则表达式

$subject = 'vdvdvdfcfss43r53f34r4f';//目标字符串

$m1 = $m2 = array();

$t1 = preg_match($pattern,$subject,$m1);
$t2 = preg_match_all($pattern,$subject,$m2);

/*print_r($m1);
print_r($m2);*/
show($m1);
show($m2);

echo "<br/>";

echo $t1;
echo "<br/>";
echo $t2;

echo "<br/>";
$replacement = "市";
$str1 = preg_replace($pattern,$replacement,$subject);
$str2 = preg_filter($pattern,$replacement,$subject);
echo $str1;
echo "<br/>";
echo $str2;

function show($arr = null){
    if(empty($arr)){
        echo "null";
    }elseif(is_array($arr) || is_object($arr)){
        echo '<pre>';
        print_r($arr);
        echo '<pre>';
    }else{
        echo 'error';
    }
}
