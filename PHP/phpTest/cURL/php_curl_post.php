<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-8-7
 * Time: 下午10:51
 */
$data = "theCityName=北京";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://www.webxml.com.cn/WebServices/WeatherWebService.asmx/getWeatherbyCityName");
curl_setopt($ch,CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch,CURLOPT_HTTPHEADER,array("application/x-www-form-urlencoded;charset=utf-8",
"Content-length:".strlen($data)));
$output = curl_exec($ch);
if(!curl_errno($ch)){
    echo $output;
}else{
    echo "ERROR:".curl_error($ch);
}
curl_close($ch);
