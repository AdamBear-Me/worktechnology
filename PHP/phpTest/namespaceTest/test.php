<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-23
 * Time: 下午8:35
 */
//注意：如果在test1.php和test2.php文件中不引入命名空间，当同时引入这两个文件的时候，就会提示这两个文件下的test方法名字冲突
require('test1.php');
require('test2.php');



Test1\test();
echo "<br/>";
Test2\test();