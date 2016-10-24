<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-23
 * Time: 下午4:05
 */
class newsModel{
    public $table = "news";

    function insert($data){
        return DB::insert($this->table,$data);
    }

    function update($data,$id){
        $where = ' Id = '.$id;
        return DB::update($this->table,$data,$where);
    }
    function count(){
        $sql = "select count(*) from ".$this->table;
        return DB::findResult($sql,0,0);
    }

    function getNewsInfo(){
        $sql = "select * from ".$this->table." order by dateline desc";
        return DB::findAll($sql);
    }

    function getNewInfo($id){
        $sql = "select * from ".$this->table." where Id = ".$id;
        return DB::findOne($sql);
    }

    function delNew($id){
        $where = " Id = ".$id;
        return DB::del($this->table,$where);
    }


}