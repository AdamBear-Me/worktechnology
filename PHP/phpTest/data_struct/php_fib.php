<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 2015/7/19 0019
 * Time: 7:58
 */
//斐波那契数列    时间复杂度: 2^n
/*$starttime = explode(" ",microtime());
echo $starttime[1];*/
function fib($i){
    if($i<2){
        return $i==0?0:1;
    }
    return fib($i-1)+fib($i-2);
}

function main($n){
    for($i=0;$i<$n;$i++){
        echo fib($i);
        echo " ";
    }
    return;
}
/*$endtime = explode(" ",microtime());
$time = $endtime[1] - $starttime[1];*/

//$time = round($time,3);
main(25);
/*echo "<br/>";
echo $time;*/
//echo fib(5);