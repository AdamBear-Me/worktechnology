<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 2015/8/8 0008
 * Time: 19:59
 */

//下载一个https资源

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"https://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.js");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

date_default_timezone_set("PRC");
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);

$output=curl_exec($ch);
curl_close($ch);
echo $output;