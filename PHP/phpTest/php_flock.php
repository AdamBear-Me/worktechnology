<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 2015/7/30 0030
 * Time: 12:47
 */

//php解决多线程读写一个文件的问题  注：php不支持多线程

/*$fp = fopen("./test.php","a+");
if(flock($fp,LOCK_EX)){
    fwrite($fp,"xiongchao come here\n");
    flock($fp,LOCK_UN);
}else{
    echo "couldn't lock the file!";
}
fclose($fp);*/

/*$fp = fopen("./test.php","r");
if(flock($fp,LOCK_EX)){
    //fwrite($fp,"xiongchao come here\n");
    echo fread($fp,10);
    echo ftell($fp);
    flock($fp,LOCK_UN);
}else{
    echo "couldn't lock the file!";
}
fclose($fp);

echo "\n";
var_dump(file("./test.php")) ;

echo(readfile("./test.php"));*/

strpos("xionghchao","chao");