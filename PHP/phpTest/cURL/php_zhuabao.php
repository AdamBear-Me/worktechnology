<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-8-7
 * Time: 上午11:27
 */

$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,"www.baidu.com");
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
$output = curl_exec($curl);
curl_close($curl);
//echo $output;
//var_dump(curl_getinfo($curl)) ;
var_dump($curl);
//echo str_replace("百度","屌丝",$output);