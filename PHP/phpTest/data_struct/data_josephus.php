<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-7-17
 * Time: 上午8:48
 * 数据结构
 */

//约瑟夫环问题
/*
 * 一群猴子排成一圈，按1，2，...，n依次编号。然后从第1只开始数，数到第m只,把它踢出圈，从它后面再开始数，
 * 再数到第m只，在把它踢出去...，如此不停的进行下去，直到最后只剩下一只猴子为止，那只猴子就叫做大王。
 * 要求编程模拟此过程，输入m、n,输出最后那个大王的编号。
 */
//链表解法
function king($n,$m){
    $monky = range(1,$n);
    $i = 0;
    while(count($monky)>1){
        $i+=1;
        $head = array_shift($monky);
        if($i%$m!=0){
            array_push($monky,$head);
        }
    }
    return $monky[0];
}
echo king(10,3);

/*约瑟夫环问题的数学解法
 *   x' = 2 3 4 5 0
 *   x  = 0 1 2 3 4
 *   x' = (x+m)%n
 */
function king2($n,$m){
    $r = 0;
    for($i=2;$i<=$n;$i++){
        $r = ($r+$m)%$i;
    }
    return $r+1;
}
echo king2(10,3);