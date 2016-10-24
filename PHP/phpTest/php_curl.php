
<html>
    <head>
        <meta charset=gbk>
    </head>
    <body>
        <form action="" method="post">
            账号：<input type="text" name="user">
        <br>
            密码：<input type="password" name="password">
        <br>
        <input type="submit" name="login" value="登录">
        </form>
    </body>
<?php
    if($_POST){
        $login = $_POST["user"];
        $password = $_POST["password"];
        $url = "http://xiongchao.net.cn/admin.php/Login/do_login";
        $fields = "login_name=".$login."&password=".$password;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_HEADER,0);//设置header  1:输出header信息  0：不输出header信息
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//要求结果为字符串且输出到屏幕上
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        $result = curl_exec($ch);
        $res = json_decode($result);
        curl_close($ch);
        var_dump($res);
    }


        /*$init = curl_init();
        $url = "http://xiongchao.net.cn/";
        curl_setopt($init,CURLOPT_URL,$url);
        $res = curl_exec($init);
        curl_close($init);
        echo $res;*/

?>
</html>
