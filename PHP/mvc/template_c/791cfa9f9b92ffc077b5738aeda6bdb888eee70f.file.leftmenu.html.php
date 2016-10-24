<?php /* Smarty version Smarty-3.1.19, created on 2015-05-23 10:01:24
         compiled from "tpl\admin\leftmenu.html" */ ?>
<?php /*%%SmartyHeaderCode:161575560321e8b2491-38539385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '791cfa9f9b92ffc077b5738aeda6bdb888eee70f' => 
    array (
      0 => 'tpl\\admin\\leftmenu.html',
      1 => 1432368012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161575560321e8b2491-38539385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5560321e8f7232_88518897',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5560321e8f7232_88518897')) {function content_5560321e8f7232_88518897($_smarty_tpl) {?><aside id="sidebar" class="column">
	<h3>新闻管理</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="admin.php?controller=index&method=newsadd">添加新闻</a></li>
		<li class="icn_categories"><a href="admin.php?controller=index&method=newslist">管理新闻</a></li>
	</ul>
	<h3>管理员管理</h3>
	<ul class="toggle">
		<li class="icn_jump_back"><a href="admin.php?controller=index&method=logout">退出登录</a></li>
	</ul>
	
	<footer>
		
	</footer>
</aside><!-- end of sidebar --><?php }} ?>
