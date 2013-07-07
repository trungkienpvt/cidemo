<?php /* Smarty version Smarty 3.1.4, created on 2013-03-18 06:05:38
         compiled from "../backend/views/templates/admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311051471122b0c9c4-37355998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84feac3e701fb09ec1c4e4e79b952be743ff82fe' => 
    array (
      0 => '../backend/views/templates/admin\\login.tpl',
      1 => 1341329006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311051471122b0c9c4-37355998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jsPath' => 1,
    'imagePath' => 1,
    'MESSAGE_SYSTEM_CONTENT' => 1,
    'MESSAGE_SYSTEM_TYPE' => 1,
    'baseUrl' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_51471122c4e5f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51471122c4e5f')) {function content_51471122c4e5f($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>

<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:311051471122b0c9c4-37355998%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:311051471122b0c9c4-37355998%%*/';?>
admin/test.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo '/*%%SmartyNocache:311051471122b0c9c4-37355998%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:311051471122b0c9c4-37355998%%*/';?>
admin/niceforms.js"></script>
<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:311051471122b0c9c4-37355998%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:311051471122b0c9c4-37355998%%*/';?>
admin/jconfirmaction.jquery.js"></script>


<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

</head>
<body>
<div id="main_container">

	<div class="header_login">
    <div class="logo"><a href="#"><img src="<?php echo '/*%%SmartyNocache:311051471122b0c9c4-37355998%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:311051471122b0c9c4-37355998%%*/';?>
images_admin/logo.gif" alt="" title="" border="0" /></a></div>
    <?php echo '/*%%SmartyNocache:311051471122b0c9c4-37355998%%*/<?php if ($_smarty_tpl->tpl_vars[\'MESSAGE_SYSTEM_CONTENT\']->value!=\'\'){?>/*/%%SmartyNocache:311051471122b0c9c4-37355998%%*/';?>
    
    <div style="clear:both"></div>        
    <div id="messageSystem" class="<?php echo '/*%%SmartyNocache:311051471122b0c9c4-37355998%%*/<?php echo $_smarty_tpl->tpl_vars[\'MESSAGE_SYSTEM_TYPE\']->value;?>
/*/%%SmartyNocache:311051471122b0c9c4-37355998%%*/';?>
"><?php echo '/*%%SmartyNocache:311051471122b0c9c4-37355998%%*/<?php echo $_smarty_tpl->tpl_vars[\'MESSAGE_SYSTEM_CONTENT\']->value;?>
/*/%%SmartyNocache:311051471122b0c9c4-37355998%%*/';?>
</div>    
    <?php echo '/*%%SmartyNocache:311051471122b0c9c4-37355998%%*/<?php }?>/*/%%SmartyNocache:311051471122b0c9c4-37355998%%*/';?>

    </div>
	     <div class="login_form">
         <h3>Admin Panel Login</h3>
         <form action="<?php echo '/*%%SmartyNocache:311051471122b0c9c4-37355998%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:311051471122b0c9c4-37355998%%*/';?>
users/submitlogin" method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="username">Username <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="username" tabindex="1" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password <span class="require">*</span>:</label></dt>
                        <dd><input type="password" name="password" id=""tabindex="2" size="54" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label></label></dt>
                    </dl>
                    
                     <dl class="submit">
                    <input type="submit" name="submit" tabindex="3" id="submit" value="Enter" />
                     </dl>
                    
                </fieldset>
                
         </form>
         </div>  
          
	
    
    <div class="footer_login">
    
    	<div class="left_footer_login">IN ADMIN PANEL | Powered by <a href="#">INDEZINER</a></div>
    	<div class="right_footer_login"><a href=""><img src="<?php echo '/*%%SmartyNocache:311051471122b0c9c4-37355998%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:311051471122b0c9c4-37355998%%*/';?>
images_admin/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

</div>		
</body>
</html><?php }} ?>