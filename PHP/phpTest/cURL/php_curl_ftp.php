<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 2015/8/8 0008
 * Time: 14:38
 */
//从FTP服务器下载一个文件到本地
$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,"ftp://182.92.100.138/test");
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_TIMEOUT,300); //设置下载时间，超过这个时间下载失败
curl_setopt($ch,CURLOPT_USERPWD,"uftp:xiongchao"); //ftp用户名：密码

$outfile = fopen('text.txt','ab'); //保存到本地的文件名
curl_setopt($ch,CURLOPT_FILE,$outfile);

$res = curl_exec($ch);
fclose($outfile);
if(!curl_errno($ch)){
    echo "return:".$res;
}else{
    echo "error:".curl_error($ch);
}

curl_close($ch);
