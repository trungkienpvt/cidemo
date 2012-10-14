<?php /*%%SmartyHeaderCode:272214f44ff3a9f7114-81746923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '560c4d19de3b9e4c64e706ed640abcb8c3c07ad4' => 
    array (
      0 => 'application/views/templates/default\\index.tpl',
      1 => 1327739484,
      2 => 'file',
    ),
    '67a146576b5e54c6e6d9afdc9661434098729706' => 
    array (
      0 => 'application/views/templates/default\\header.tpl',
      1 => 1327739142,
      2 => 'file',
    ),
    'c3a8c58e04a208f72371e0685bf39a67bac6cb44' => 
    array (
      0 => 'application/views/templates/default\\playvimeo.tpl',
      1 => 1328634576,
      2 => 'file',
    ),
    'ad2077cd468381f97bf1a62a41c79652650723de' => 
    array (
      0 => 'application/views/templates/default\\footer.tpl',
      1 => 1321298284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272214f44ff3a9f7114-81746923',
  'variables' => 
  array (
    'jsPath' => 1,
    'imagePath' => 1,
    'baseUrl' => 1,
    'MENU_TOP' => 1,
    'MENU_LEFT' => 1,
    'MESSAGE_ARRAY' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f44ff3ab7a53',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f44ff3ab7a53')) {function content_4f44ff3ab7a53($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
admin_style.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
admin_niceforms-default.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/ddaccordion.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/clockp.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/jconfirmaction.jquery.js"></script>
</head>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/niceforms.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/jconfirmaction.jquery.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/test.js"></script>

<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

</head>
<body>
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;?>
images_admin/logo.gif" alt="" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome Admin, <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
index.php">Visit site</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
users/logout" class="logout">Logout</a></div>
    <div id="clock_a"></div>
    </div>
    
    <div class="main_content">
    
                    <div class="menu">
                    <?php echo $_smarty_tpl->tpl_vars['MENU_TOP']->value;?>

                    </ul>
                    </div> 
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    <div class="left_content">
    
    		<?php echo $_smarty_tpl->tpl_vars['MENU_LEFT']->value;?>

    
    <div class="right_content">
    <?php if ($_smarty_tpl->tpl_vars['MESSAGE_ARRAY']->value['error_message']!=''){?>            
    <div class="<?php echo $_smarty_tpl->tpl_vars['MESSAGE_ARRAY']->value['message_type'];?>
"><?php echo $_smarty_tpl->tpl_vars['MESSAGE_ARRAY']->value['error_message'];?>
</div>    
    <?php }?>
    <h2><?php echo $_smarty_tpl->tpl_vars['VIMEOAPI_TITLE']->value;?>
</h2>
     
         <div class="form">
         <h1>Vimeo Simple API PHP Example</h1>
	<?php echo $_smarty_tpl->tpl_vars['userData']->value;?>

         </div>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	<div class="footer">
    
    	<div class="left_footer">IN ADMIN PANEL | Powered by <a href="http://indeziner.com">INDEZINER</a></div>
<div class="right_footer"><a href="http://indeziner.com"><img src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;?>
images_admin/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

</div>		</body>
</html><?php }} ?>