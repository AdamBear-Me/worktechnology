<?php
//常用的PHP小功能或命令
##############PHP使用rsync推送文件################
$full_file = '/data1/www/privdata/ug.admin.weibo.com/data/tagmanage/conveydata/test.txt';
$rsyncHost = '10.13.2.61';
$rsyncModule = 'datayw';
$cmd = "rsync -agt {$full_file} {$this->rsyncHost}::{$this->rsyncModule}/ecwj/";
$file = popen($cmd, "r");
pclose($file);
####################end###########################


?>
