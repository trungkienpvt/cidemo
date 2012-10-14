<?php /* Smarty version Smarty 3.1.4, created on 2012-09-12 09:45:14
         compiled from "../backend/views/templates/admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:249375050bc1ac2caf8-11404201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9679457b60353d6635e0dc4d8867dd1a13d4f53' => 
    array (
      0 => '../backend/views/templates/admin\\index.tpl',
      1 => 1334251276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249375050bc1ac2caf8-11404201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jsPath' => 1,
    'imagePath' => 1,
    'RIGHT_HEADER' => 1,
    'MENU_TOP' => 1,
    'MESSAGE_SYSTEM_CONTENT' => 1,
    'MESSAGE_SYSTEM_TYPE' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5050bc1ad0295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5050bc1ad0295')) {function content_5050bc1ad0295($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>

<script language="javascript" type="text/javascript" src="<?php echo '/*%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/';?>
admin/niceforms.js"></script>
<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/';?>
admin/jconfirmaction.jquery.js"></script>
<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/';?>
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
    <div class="logo"><a href="#"><img src="<?php echo '/*%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/';?>
images_admin/logo.gif" alt="" title="" border="0" /></a></div>
    <?php echo '/*%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/<?php echo $_smarty_tpl->tpl_vars[\'RIGHT_HEADER\']->value;?>
/*/%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/';?>

    
    
    <div class="main_content">
    
                    <div class="menu">
                    <?php echo '/*%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_TOP\']->value;?>
/*/%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/';?>

                    </ul>
                    </div> 
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    
    
    <div class="right_content">
    <?php echo '/*%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/<?php if ($_smarty_tpl->tpl_vars[\'MESSAGE_SYSTEM_CONTENT\']->value!=\'\'){?>/*/%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/';?>
            
    <div id="messageSystem" class="<?php echo '/*%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/<?php echo $_smarty_tpl->tpl_vars[\'MESSAGE_SYSTEM_TYPE\']->value;?>
/*/%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/';?>
"><?php echo '/*%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/<?php echo $_smarty_tpl->tpl_vars[\'MESSAGE_SYSTEM_CONTENT\']->value;?>
/*/%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/';?>
</div>    
    <?php echo '/*%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/<?php }?>/*/%%SmartyNocache:249375050bc1ac2caf8-11404201%%*/';?>

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