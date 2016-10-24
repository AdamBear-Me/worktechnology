<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 2015/8/8 0008
 * Time: 17:22
 */

//把本地文件上传到FTP服务器
$ch = curl_init();
$localfile = "php_curl_cookie.php";
$fp = fopen($localfile,'r');

curl_setopt($ch,CURLOPT_URL,"ftp://182.92.100.138/php_curl_cookie.php");
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_TIMEOUT,300); //设置下载时间，超过这个时间下载失败
curl_setopt($ch,CURLOPT_USERPWD,"root:Xiongchao007"); //ftp用户名：密码

curl_setopt($ch,CURLOPT_UPLOAD,1);
curl_setopt($ch,CURLOPT_INFILE,$fp);
curl_setopt($ch,CURLOPT_INFILESIZE,filesize($localfile));

$res = curl_exec($ch);
fclose($fp);
if(!curl_errno($ch)){
    echo "Uploaded successfully";
}else{
    echo "error:".curl_error($ch);
}

curl_close($ch);