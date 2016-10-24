<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 2015/7/30 0030
 * Time: 17:09
 */

//设置主机和端口  注：这里的端口和主机应该和服务端中的定义是相同的。
$host = "127.0.0.1";
$port=5353;
set_time_limit(0);
//要发送的信息
$message = "xiongchao";
echo "Message To server :".$message;

//创建socket
$socket = socket_create(AF_INET,SOCK_STREAM,0) or die("Could not create socket\n");

//连接到服务端
//此时和服务端不同，客户端socket不绑定端口和主机。相反，它连接到服务端socket，等待接受来自客户端socket的连接。
//这一步建立了客户端socket到服务端socket的连接。
$result = socket_connect($socket,$host,$port) or die("Could not connect to server\n");

//写入服务端socket  在此步骤中，客户端socket的数据被发送到服务端socket。
socket_write($socket,$message,strlen($message)) or die("Could not send data to server\n");

//阅读来自服务端的响应
$result = socket_read($socket,1024) or die("Could not read server response\n");

echo "Reply from server:".$result;

//关闭socket
socket_close($socket);



