<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-21
 * Time: 下午5:34
 */

class testController {
    function show(){
        global $view;
        $testModel =  M('test');
        $data = $testModel->get();
       /* $testView =  V('test');
        $testView->display($data);*/
        $view->assign('str','梵蒂冈地方');
        $view->display('test.tpl');

    }
} 