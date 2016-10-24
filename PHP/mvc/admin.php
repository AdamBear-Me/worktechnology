<?php
/**
 * Created by PhpStorm.
 * User: 超
 * Date: 15-5-21
 * Time: 下午5:55
 */
/*require_once("function.php");
require_once("config.php");

$view = ORG('Smarty/','Smarty',$viewConfig);
$controller = $_GET['controller'];
$method = $_GET['method'];
C($controller,$method);*/

error_reporting(0);
header("Content-type:text/html;charset=utf-8");
session_start();
require_once('config.php');
require_once('framework/pc.php');
PC::run($config);