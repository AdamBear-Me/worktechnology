<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-21
 * Time: 下午6:39
 */

//控制器调用函数
function C($name,$method){
    require_once('/libs/Controller/'.$name.'Controller.class.php');
    $controller = $name.'Controller';
    $obj = new $controller();
    $obj->$method();
    //eval('$obj = new '.$name.'Controller();$obj->'.$method);
}

//模型调用函数
function M($name){
    require_once('/libs/Model/'.$name.'Model.class.php');
    $model = $name."Model";
    $obj = new $model();
    return $obj;
}

//视图调用函数
function V($name){
    require_once('/libs/View/'.$name.'View.class.php');
    $view = $name."View";
    $obj = new $view();
    return $obj;
}

//用于调用第三方类
function ORG($path,$name,$param=array()){
    require_once('libs/ORG/'.$path.$name.'.class.php');
    $obj = new $name();
    if(!empty($param)){
        foreach($param as $key=>$value){
            $obj->$key = $value;
        }
    }
    return $obj;
}

//对一些非法字符进行转义
function daddslashes($str){
    return (!get_magic_quotes_gpc())?addslashes($str):$str;  //判断magic_quotes_gpc是否开启（值为on），如果未开启，则addslashes对预转义进行转义
}