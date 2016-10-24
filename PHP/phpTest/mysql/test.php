<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 2015/8/2 0002
 * Time: 17:38
 */

$link = mysql_connect("127.0.0.1","root","");
if(!$link){
    die("数据库连接失败".mysql_error());
}
mysql_select_db("bizhi",$link) or die("不能选定数据库bizhi：".mysql_error());
mysql_set_charset("utf-8");
$result = mysql_query("select * from bizhi_diy");

var_dump(mysql_fetch_row($result));
var_dump(mysql_fetch_array($result)) ;
/*foreach(mysql_fetch_row($result) as $row){
    echo $row,"\n";
}*/

/*while($row = mysql_fetch_row($result)){
    foreach($row as $data){
        echo $data."\n";
    }
}*/