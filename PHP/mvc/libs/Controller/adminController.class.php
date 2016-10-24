<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-22
 * Time: 下午9:16
 */

class adminController{

    public $auth="";

    public function __construct(){
        $authObj = M("auth");
        $this->auth = $authObj->getauth();
        if(empty($this->auth)&&(PC::$method!='login')){
            $this->showMessage("请登录后再操作","admin.php?controller=admin&method=login");
        }
    }

    public function login(){
        if($_POST){
            $this->checklogin();
        }else{
            VIEW::display('admin/login.html');
        }
    }

    private function checklogin(){
        $auth = M("auth");
        if($auth->loginsubmitcheck()){
            $this->showMessage("登陆成功","admin.php?controller=index&method=index");
        }else{
            $this->showMessage("登陆失败","admin.php?controller=admin&method=login");
        }
    }

    public function showMessage($info,$url){
        echo "<script>alert('$info');window.location.href='$url';</script>";
    }


}