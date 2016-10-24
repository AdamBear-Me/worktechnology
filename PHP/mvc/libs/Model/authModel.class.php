<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-22
 * Time: 下午9:58
 */

class authModel{
    private $auth = "";//当前用户的信息

    function loginsubmitcheck(){
        if(empty($_POST['username'])||empty($_POST['password'])){
            return false;
        }
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);

        if($this->auth = $this->checkuser($username,$password)){
            $_SESSION['auth'] = $this->auth;
            return true;
        }else{
            return false;
        }
    }

    function checkuser($username,$password){
        $admin = M('admin');
        $auth = $admin->getUserInfo($username);

        if(!empty($auth)&&$auth['password']==$password){
            return $auth;
        }else{
            return false;
        }
    }

    public function getauth(){
        return $this->auth;
    }

    function __construct(){
        if(isset($_SESSION['auth'])&&!empty($_SESSION['auth'])){
            $this->auth = $_SESSION['auth'];
        }
    }

}