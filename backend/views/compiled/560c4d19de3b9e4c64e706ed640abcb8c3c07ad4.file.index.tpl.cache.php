<?php /* Smarty version Smarty 3.1.4, created on 2012-02-22 07:44:10
         compiled from "application/views/templates/default\index.tpl" */ ?>
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
  ),
  'nocache_hash' => '272214f44ff3a9f7114-81746923',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_4f44ff3aaef75',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f44ff3aaef75')) {function content_4f44ff3aaef75($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>

<script language="javascript" type="text/javascript" src="<?php echo '/*%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/';?>
admin/niceforms.js"></script>
<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/';?>
admin/jconfirmaction.jquery.js"></script>
<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/';?>
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
    <div class="logo"><a href="#"><img src="<?php echo '/*%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/';?>
images_admin/logo.gif" alt="" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome Admin, <a href="<?php echo '/*%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/';?>
index.php">Visit site</a> | <a href="<?php echo '/*%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/';?>
users/logout" class="logout">Logout</a></div>
    <div id="clock_a"></div>
    </div>
    
    <div class="main_content">
    
                    <div class="menu">
                    <?php echo '/*%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_TOP\']->value;?>
/*/%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/';?>

                    </ul>
                    </div> 
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    <div class="left_content">
    
    		<?php echo '/*%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_LEFT\']->value;?>
/*/%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/';?>

    
    <div class="right_content">
    <?php echo '/*%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/<?php if ($_smarty_tpl->tpl_vars[\'MESSAGE_ARRAY\']->value[\'error_message\']!=\'\'){?>/*/%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/';?>
            
    <div class="<?php echo '/*%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/<?php echo $_smarty_tpl->tpl_vars[\'MESSAGE_ARRAY\']->value[\'message_type\'];?>
/*/%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/';?>
"><?php echo '/*%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/<?php echo $_smarty_tpl->tpl_vars[\'MESSAGE_ARRAY\']->value[\'error_message\'];?>
/*/%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/';?>
</div>    
    <?php echo '/*%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/<?php }?>/*/%%SmartyNocache:272214f44ff3a9f7114-81746923%%*/';?>

    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['layout_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	<div class="footer">
    
    	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    
    </div>

</div>		</body>
</html><?php }} ?>