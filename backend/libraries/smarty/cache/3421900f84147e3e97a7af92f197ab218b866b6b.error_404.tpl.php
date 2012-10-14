<?php /*%%SmartyHeaderCode:145694ff31b53955a92-79216984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3421900f84147e3e97a7af92f197ab218b866b6b' => 
    array (
      0 => '../backend/views/templates/admin\\error_404.tpl',
      1 => 1337792873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145694ff31b53955a92-79216984',
  'variables' => 
  array (
    'baseUrl' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ff31b539d87f',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff31b539d87f')) {function content_4ff31b539d87f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>404 - online shop</title>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.pngFix.js"></script> 
		
		<!-- Active pngfix -->
		<script type="text/javascript"> 
    		$(document).ready(function(){ 
      		$(document).pngFix(); 
    	}); 
		</script> 
		
	</head>
<body>

	<!-- Warp around everything -->
	<div id="warp">
		<div id="content">
		<center>
		<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/images/404-Error-Page.png"/></a>
		</center>
		</div>

	</div>
	<!-- End Warp around everything -->
	
</body>
</html><?php }} ?>