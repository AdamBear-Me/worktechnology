<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-24
 * Time: 上午11:02
 */
//php链式操作

class chain
{
    //使用链式操作时，方法返回的必须是$this
    function where()
    {
        return $this;
    }

    function order()
    {
        return $this;
    }

    function limit()
    {
        return $this;
    }
}

$chain = new chain();

$chain->where("id = 3")->order("id desc")->limit(10);//链式操作