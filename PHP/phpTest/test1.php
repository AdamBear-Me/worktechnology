<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-8-10
 * Time: 下午5:31
 */

for($i=0;$i<2;$i++){
    pcntl_fork();
    print_r("-\n");
}