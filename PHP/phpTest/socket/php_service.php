<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 2015/7/30 0030
 * Time: 16:57
 */

//设置主机和端口   端口号可以是1024 -65535之间的任何正整数。
$host = "127.0.0.1";
$port=5353;
set_time_limit(0);//设置程序的执行时间  当为0的时候永久执行直到程序结束，如果为大于零的数字，则不管程序是否执行完成，到了设定的秒数，程序结束。

//创建socket
$socket = socket_create(AF_INET,SOCK_STREAM,0) or die("could not create socket\n");

//创建的socket资源绑定到IP地址和端口号。
$result = socket_bind($socket, $host, $port) or die("Could not bind to socket\n");

//启动socket监听(在绑定到IP和端口后，服务端开始等待客户端的连接。在没有连接之前它就一直等下去。)
$result = socket_listen($socket,3) or die("Could not set up socket listener\n");

//接受连接  这个函数会接受所建的socket传入的连接请求。在接受来自客户端socket的连接后，该函数返回另一个socket资源，
//实际上就是负责与相应的客户端socket通信。这里的“$spawn”就是负责与客户端socket通信的socket资源。
$spawn = socket_accept($socket) or die("Could not accept incoming connection\n");

//从客户端socket读取消息
$input = socket_read($spawn,1024) or die("Could not read input\n");

//反转消息
$output = strrev($input)."\n";

//发送消息给客户端socket
socket_write($spawn,$output,strlen(($output))) or die("Could not write output\n");

//关闭socket
socket_close($spawn);
socket_close($socket);