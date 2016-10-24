<?php /* Smarty version Smarty-3.1.19, created on 2015-05-23 11:35:53
         compiled from "tpl\admin\newslist.html" */ ?>
<?php /*%%SmartyHeaderCode:553355603377326738-77224400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47c62ee193adc3c2b25bda9a5baf692fcb6775b0' => 
    array (
      0 => 'tpl\\admin\\newslist.html',
      1 => 1432373750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '553355603377326738-77224400',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55603377579bc1_39242057',
  'variables' => 
  array (
    'data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55603377579bc1_39242057')) {function content_55603377579bc1_39242057($_smarty_tpl) {?><!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>后台管理系统</title>
	
	<link rel="stylesheet" href="public/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="public/css/ie.css" type="text/css" media="screen" />
	<script src="public/js/html5.js"></script>
	<![endif]-->
	<script src="public/js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="public/js/hideshow.js" type="text/javascript"></script>
	<script src="public/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="public/js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="#">后台管理面板</a></h1>
			<h2 class="section_title"></h2><div class="btn_view_site"><a href="index.php">查看网站</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>admin</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="admin.php?controller=admin">后台管理中心</a> <div class="breadcrumb_divider"></div> <a class="current">新闻管理列表</a></article>
		</div>
	</section><!-- end of secondary bar -->

	<?php echo $_smarty_tpl->getSubTemplate ('admin/leftmenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<section id="main" class="column">
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">新闻管理列表</h3>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0" style="margin:0"> 
					<thead> 
						<tr>  
			    				<th>ID</th>
			    				<th>标题</th>
			    				<th>作者</th>
			    				<th>操作</th>
						</tr> 
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
						<tr>
			    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Id'];?>
</td>
			    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td> 
			    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</td> 
			    				<td><input type="image" src="public/images/icn_edit.png" title="Edit" onclick="window.location.href='admin.php?controller=index&method=newsadd&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['Id'];?>
'"><input type="image" src="public/images/icn_trash.png" title="Trash" onclick="window.location.href='admin.php?controller=index&method=newsdel&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['Id'];?>
'"></td>
						</tr>
					<?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
						<tr>
							<td  colspan=4>
								暂无新闻
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div><!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content">

			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		<div class="spacer"></div>
	</section>


</body>

</html><?php }} ?>
