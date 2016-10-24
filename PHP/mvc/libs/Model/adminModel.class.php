<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-22
 * Time: 下午9:58
 */
class adminModel{
    public $table = "admin";

    //获取用户信息
    function getUserInfo($username){
        $sql = "select * from ".$this->table.' where username="'.$username.'"';
        return DB::findOne($sql);
    }



}