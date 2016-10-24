<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 2015/7/13 0013
 * Time: 22:36
 */
//php排序算法

$arr = array(1,4,3,6,8,2,5);

print_r($arr);
/*  快速排序
 *  通过一趟排序将要排序的数据分割成独立的两部分，其中一部分的所有数据都比另外一部分的所有数据都要小，
 *  然后再按此方法对这两部分数据分别进行快速排序，整个排序过程可以递归进行，以此达到整个数据变成有序序列。
 *  时间复杂度：o(nlogn)    最好情况：o(nlogn)   最坏情况：o(n^2)
 */
function quick_sort($arr)
{
    if(count($arr)<=1)
        return $arr;

    $base = $arr[0];
    $left_arr = array();
    $right_arr = array();
    for($i=1;$i<count($arr);$i++){
        if($arr[$i]<=$base){
            $left_arr[] = $arr[$i];
        }else{
            $right_arr[] = $arr[$i];
        }
    }
    $left_arr = quick_sort($left_arr);
    $right_arr = quick_sort($right_arr);
    return array_merge($left_arr,array($base),$right_arr);
};
print_r(quick_sort($arr));

/*  插入排序
 *  每次将一个待排序的数据元素插入到前面已经排好序的数列中，使数列依然有序，知道待排序数据元素全部插入完为止。
 *  时间复杂度：o(n^2)    最好情况：o(n)   最坏情况：o(n^2)
 */
function insert_sort($arr){
    $count = count($arr);
    for($i=1;$i<$count;$i++){
        $tmp = $arr[$i];
        for($j=$i-1;$j>=0;$j--){
            if($arr[$j]>$tmp){
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $tmp;
            }else{
                break;
            }
        }
    }
    return $arr;
}
print_r(insert_sort($arr)) ;

/* 选择排序
 *  每一趟从待排序的数据元素中选出最小（或最大）的一个元素，顺序放在已排好序的数列的最后，
 *  直到全部待排序的数据元素排完。
 *  时间复杂度：o(n^2)   最好情况：o(n^2)   最坏情况：o(n^2)
 *
 */
function select_sort($arr)
{
    $count = count($arr);
    for($i=0;$i<$count-1;$i++){
        $min = $i;  //先假设最小值的位置
        for($j=$i+1;$j<$count;$j++){
            if($arr[$min]>$arr[$j]){
                $min = $j;
            }
        }

        if($min!=$i){
            $tmp = $arr[$min];
            $arr[$min] = $arr[$i];
            $arr[$i] = $tmp;
        }
    }
    return $arr;
}

print_r(select_sort($arr));


/*  冒泡排序
 *  两两比较待排序数据元素的大小，发现两个数据元素的次序相反时即进行交换，直到没有反序的数据元素为止。
 *  时间复杂度：o(n^2)   最好情况：o(n)   最坏情况：o(n^2)
 */

function bubble_sort($arr){
    $count = count($arr);
    if($count<=0){
        return false;
    }
    for($i=0;$i<$count;$i++){
        for($j=$count-1;$j>$i;$j--){
            if($arr[$j]<$arr[$j-1]){
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j-1];
                $arr[$j-1] = $tmp;
            }
        }
    }

    return $arr;
}

print_r(bubble_sort($arr));

/*希尔排序
 *设定每次比较相隔的步数（即相隔的距离），每次比较完后步数重新设定（步数减少）然后再进行比较，
 * 原理就是利用步数达到基本有序，当步数为1比较完之后，数组排序完成
 * 时间复杂度：o(nlogn)~o(n^2) 最好情况：o(n^(3/2)) 最差情况：o(n^2)
 */
function shell_sort($arr){
    $arr_len = count($arr);
    $step = count($arr);
    do{
        $step = floor($step/3) + 1; //每次跳动的步数
        for($i=$step;$i<$arr_len;$i++){
            if($arr[$i]<$arr[$i-$step]){
                $tmp = $arr[$i];
                $arr[$i] =  $arr[$i-$step];
                $arr[$i-$step] = $tmp;
            }
        }
    }while($step>1);
}

print_r(shell_sort($arr));