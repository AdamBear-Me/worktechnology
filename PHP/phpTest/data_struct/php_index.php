<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 2015/7/19 0019
 * Time: 16:37
 */
//使用PHP利用字符串朴素模式匹配写一个index()函数，输出一个字符串在另一个字符串中第一个匹配的位置

$a = "goodgooglesearch";
$b = "googlse";

/*function index($a,$b){
    $i = 0;
    $j = 0;
    $a_len = strlen($a);
    $b_len = strlen($b);
    while($i<$a_len && $j<$b_len){
        if($a[$i]==$b[$j]){
            ++$i;
            ++$j;
        }else{
            $i = $i-$j+1;
            $j = 0;
        }
    }
    if($j>=$b_len){
        return $i-$b_len;
    }else{
        return false;
    }
}
var_dump(index($a,$b));*/


//使用PHP利用字符串朴素模式匹配写一个index()函数，输出一个字符串在另一个字符串中第一个匹配的位置

/*function index_kmp($a,$b){

}*/
$arr = array();
function get_next($b,$arr){
    $i = 1;
    $j = 0;
    $arr[0] = 0;
    $b_len = strlen($b);
    while($i<$b_len){
        if($j==0 || $b[$i]==$b[$j]){
            ++$i;
            ++$j;
            $arr[$i] = $j;
        }else{
            $j = $arr[$j];
        }
    }
}
get_next($b,$arr);
var_dump($arr);