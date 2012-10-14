<?php /*%%SmartyHeaderCode:31261507a1d134e6d15-09202256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81b7e99724e59b65bc9d0f7d38f05ab2bd7a5b40' => 
    array (
      0 => 'frontend/views/templates/default\\index.tpl',
      1 => 1338922481,
      2 => 'file',
    ),
    '3bb751ca251d9f31cd7eedb6c02e549b0a511dd4' => 
    array (
      0 => 'frontend/views/templates/default\\header.tpl',
      1 => 1338407477,
      2 => 'file',
    ),
    '6acd19bc47bad9c7fa05d3f31db8e2449989e017' => 
    array (
      0 => 'frontend/views/templates/default\\headerTop.tpl',
      1 => 1338924279,
      2 => 'file',
    ),
    '34afaa7d4855f409a57d20e8bf2e507e103316bc' => 
    array (
      0 => 'frontend/views/templates/default\\carts.tpl',
      1 => 1338133708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31261507a1d134e6d15-09202256',
  'variables' => 
  array (
    'jsPath' => 1,
    'MENU_LEFT' => 1,
    'MESSAGE_SYSTEM_CONTENT' => 1,
    'MESSAGE_SYSTEM_TYPE' => 1,
    'PAGE_TITLE' => 1,
    'BANNER_TOP' => 1,
    'LEFT_CONTENT' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_507a1d136fa2b',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507a1d136fa2b')) {function content_507a1d136fa2b($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
bored.css" tppabs="" type="text/css" rel="stylesheet"/>
<!--[if  IE 7]>
    <link href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
bored_ie7.css" tppabs="" type="text/css" rel="stylesheet" media="screen" />
<![endif]-->

<!--[if  IE 6]>
    <link href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
bored_ie6.css" tppabs="" type="text/css" rel="stylesheet" media="screen" />
<![endif]-->
<link href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
dropdown.css" tppabs="" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
jquery.js"></script>
</head>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/niceforms.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/test.js"></script>

<script type="text/javascript">
	
	$(document).ready(function() {

	});
	
</script>

</head>
<body>

	<div id="page">
					<div id="header">
			<a id="logo" href="">Bored of Southsea</a>
			
			<div id="cart">
			<div id="basket" style="left">
					<?php echo $_smarty_tpl->tpl_vars['COMPUTER_INFO']->value;?>

                    <span><?php echo $_smarty_tpl->tpl_vars['COUNT_ITEM_CART']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['ITEM_TITLE']->value;?>
</span>
					<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
cart"><?php echo $_smarty_tpl->tpl_vars['CART_LINK_HEADER']->value;?>
</a>
					
				</div>
				<div style="float:right"><?php echo $_smarty_tpl->tpl_vars['RIGHT_HEADER']->value;?>
</div>
		</div>
			</div>
			<div id="navigation" class="clearFix">
			<?php echo $_smarty_tpl->tpl_vars['MENU_TOP']->value;?>


			</div>

			
		<?php if ($_smarty_tpl->tpl_vars['MENU_LEFT']->value==1){?>	
		<div id="productPage" class="contentWrap">
    <div id="innerWrap" class="clearFix">
    
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['layout_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }else{ ?>
    <div id="categoryPage" class="contentWrap">
    
    <?php if ($_smarty_tpl->tpl_vars['MESSAGE_SYSTEM_CONTENT']->value!=''){?>            
    <div id="messageSystem" class="<?php echo $_smarty_tpl->tpl_vars['MESSAGE_SYSTEM_TYPE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MESSAGE_SYSTEM_CONTENT']->value;?>
</div>    
    <?php }?>
    
<h1><?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
</h1>
    <div id="innerWrap" class="clearFix">
    <div id="primary">
    <?php if ($_smarty_tpl->tpl_vars['BANNER_TOP']->value==1){?>
    <?php echo $_smarty_tpl->getSubTemplate ("banner-detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['layout_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <?php echo $_smarty_tpl->tpl_vars['LEFT_CONTENT']->value;?>

    
    <?php }?>
    
    </div>
</body></html><?php }} ?>