<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-8-10
 * Time: 上午8:56
 */

$node_urls=array('http://www.baidu.com','http://www.google.com.hk');
$ch=array();
$mh=curl_multi_init(); //创建批处理句柄
$ch[0]=curl_init($node_urls[0]);
$ch[1]=curl_init($node_urls[1]);
for($i=0;$i<2;$i++)
{
    curl_setopt($ch[$i],CURLOPT_RETURNTRANSFER,1);
    curl_multi_add_handle($mh,$ch[$i]); //增加句柄
}
$running=NULL;
do{
    usleep(10000);
    curl_multi_exec($mh,$running); //执行批处理句柄
}while($running>0);
$res=array();
for($j=0;$j<2;$j++)
{
    $res[$j]=curl_multi_getcontent($ch[$j]);
}

for($k=0;$k<2;$k++)
{
    curl_multi_remove_handle($mh,$ch[$k]); //关闭所有句柄
}
curl_multi_close($mh);

echo $res[1];