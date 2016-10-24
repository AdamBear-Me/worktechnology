<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 14-11-29
 * Time: 下午10:01
 */
//define('BASEDIR',__DIR__);
//include BASEDIR.'/Common/Loader.php';
//spl_autoload_register('\\Common\\Loader::autoload');

//Common\Object::test();
//App\Controller\Home\index::test();

//数据结构
//栈
/*$stack = new SplStack();
$stack->push("data1\n");//入栈
$stack->push("data2\n");
echo $stack->pop();//出栈
echo $stack->pop();
//队列
$queue = new SplQueue();
$queue->enqueue("data1\n");//入队
$queue->enqueue("data2\n");
echo $queue->dequeue();//出队
echo $queue->dequeue();
//堆
$heap = new SplMinHeap();//最小堆
$heap->insert("data1\n");//入堆
$heap->insert("data2\n");
echo $heap->extract();//提取
echo $heap->extract();
//固定数组
$array = new SplFixedArray(10);//固定数组
$array[0] = 123;
$array[9] = 1234;
var_dump($array);*/

//php链式操作
//$db = new Common\DataBase();
/*$db->where("id=1");
$db->where("name=2");
$db->order("id desc");
$db->limit(10);*/
//$db->where("id=1")->where("name=2")->order("id desc")->limit(10);


//魔术方法
/*$Obj = new Common\Object();
$Obj->title="hello"; //当是不存在的属性时，就会调用__set()魔术方法
echo $Obj->title;   //当是不存在的属性时，就会调用__get()魔术方法

echo $Obj->test("hello",123);//当是不存在的方法时，就会调用__call()魔术方法

echo Common\Object::test1("hello1",1234); //当是不存在的静态方法时，就会调用__callStatic()魔术方法

echo $Obj; //当对象要转换为字符串时，就会调用__toString()魔术方法

echo $Obj("test1"); //当把对象当成函数使用时，就会调用__invoke()魔术方法

//设计模式
//工厂模式
//$db = Common\Factory::createDatabase();  //不用直接new Databse()

//注册模式
$db = Common\Register::get('db2');

//单例模式
$db1 = Common\DataBase::getInstance(); //无论调用多少次，其实getInstance()中的同一个实例
$db1 = Common\DataBase::getInstance();
$db1 = Common\DataBase::getInstance();
$db1 = Common\DataBase::getInstance();
$db1 = Common\DataBase::getInstance();*/


//适配器模式
$db = new Common\DataBase\MySql();
$db->connect('localhost','root','','fareast');
$db->query("show tables");
$db->close();







