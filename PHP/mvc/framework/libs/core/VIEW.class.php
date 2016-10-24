<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-22
 * Time: 下午4:28
 */

class VIEW{
    public static $view;

    public static  function init($viewtype,$config){
        self::$view = new $viewtype();
        foreach($config as $key=>$value){
            self::$view->$key = $value;
        }
    }

    //$data是数组
    public static function assign($data){
        foreach($data as $key=>$value){
            self::$view->assign($key,$value);
        }
    }

    public static function display($template){
        self::$view->display($template);
    }
}