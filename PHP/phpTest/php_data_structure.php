<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-24
 * Time: 上午9:55
 */
//php的常用的数据结构练习

//栈
echo "栈：";
$stack = new SplStack();
$stack->push("data1\n");
$stack->push("data2\n");
echo $stack->pop();
echo $stack->pop();
echo "<br/>";

//队列
echo "队列：";
$queue = new SplQueue();
$queue->enqueue("data1\n");
$queue->enqueue("data2\n");
echo $queue->dequeue();
echo $queue->dequeue();
echo "<br/>";

//最小堆
echo "最小堆：";
$minHeap = new SplMinHeap();
$minHeap->insert("data1\n");
$minHeap->insert("data2\n");
echo $minHeap->extract();
echo $minHeap->extract();
echo "<br/>";

//最大堆
echo "最大堆：";
$maxHeap = new SplMaxHeap();
$maxHeap->insert("data1\n");
$maxHeap->insert("data2\n");
echo $maxHeap->extract();
echo $maxHeap->extract();
echo "<br/>";

//固定尺寸数组：不论有没有使用，都会为其分配内存空间
echo "固定尺寸数组：";
$FixedArray = new SplFixedArray(10);
$FixedArray[0] = "123";
$FixedArray[9] = "1234";
var_dump($FixedArray);
echo "<br/>";