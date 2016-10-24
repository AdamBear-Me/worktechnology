<?php /* Smarty version Smarty-3.1.19, created on 2015-05-23 11:59:37
         compiled from "tpl\admin\newsadd.html" */ ?>
<?php /*%%SmartyHeaderCode:27491556033498d1e14-73494734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6ece1ac3d299b64aefeb22635a3fd9475c544e6' => 
    array (
      0 => 'tpl\\admin\\newsadd.html',
      1 => 1432375169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27491556033498d1e14-73494734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55603349b43eb8_69915412',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55603349b43eb8_69915412')) {function content_55603349b43eb8_69915412($_smarty_tpl) {?><!doctype html>
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
			<h1 class="site_title"><a href="admin.php?controller=index&method=index">后台管理面板</a></h1>
			<h2 class="section_title"></h2><div class="btn_view_site"><a href="javascript:;">查看网站</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>admin</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="admin.php?controller=index&method=index">后台管理系统</a> <div class="breadcrumb_divider"></div> <a class="current">文章发布</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<?php echo $_smarty_tpl->getSubTemplate ('admin/leftmenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<section id="main" class="column">
		<form id="form1" name="form1" method="post" action="admin.php?controller=index&method=newsadd">
			<article class="module width_full">
				<header><h3>发表新文章</h3></header>
					<div class="module_content">
							<fieldset>
								<label>标题</label>
								<input type="text" name="title" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset>
								<label>内容</label>
								<textarea rows="12" name="content"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['content'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
							</fieldset>
							<fieldset style="width:48%; float:left; margin-right: 3%;">
								<label>作者</label>
								<input type="text" name="author" style="width:92%;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['author'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset>
							<fieldset style="width:48%; float:left;">
								<label>出处</label>
								<input type="text" name="from" style="width:92%;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['from'])===null||$tmp==='' ? '' : $tmp);?>
">
							</fieldset><div class="clear"></div>
					</div>
				<footer>
					<div class="submit_link">
						<input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['Id'])===null||$tmp==='' ? '' : $tmp);?>
">
						<input type="submit" name="submit" value="发布" class="alt_btn">
					</div>
				</footer>
			</article>
		</form>
		<div class="spacer"></div>
	</section>


</body>

</html><?php }} ?>
