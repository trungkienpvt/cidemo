<?php /*%%SmartyHeaderCode:252654f451b25f23364-61834147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb7050ee225b3f12e766aae08062f9ad6f0f5c53' => 
    array (
      0 => 'frontend/views/templates/admin\\login.tpl',
      1 => 1325352036,
      2 => 'file',
    ),
    'fcae61c417ff051f6136c29812aa85b48fce152c' => 
    array (
      0 => 'frontend/views/templates/admin\\header.tpl',
      1 => 1327739142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252654f451b25f23364-61834147',
  'variables' => 
  array (
    'jsPath' => 1,
    'imagePath' => 1,
    'MESSAGE_ARRAY' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f451b261199c',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f451b261199c')) {function content_4f451b261199c($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/test.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/niceforms.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
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
    <div class="logo"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;?>
images_admin/logo.gif" alt="" title="" border="0" /></a></div>
    <?php if ($_smarty_tpl->tpl_vars['MESSAGE_ARRAY']->value['error_message']!=''){?>
    <div style="clear:both"></div>            
    <div class="<?php echo $_smarty_tpl->tpl_vars['MESSAGE_ARRAY']->value['message_type'];?>
" style=""><?php echo $_smarty_tpl->tpl_vars['MESSAGE_ARRAY']->value['error_message'];?>
</div>    
    <?php }?>
    </div>
	     <div class="login_form">
         <h3>Admin Panel Login</h3>
         <form action="" method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="username">Username <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="username" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password <span class="require">*</span>:</label></dt>
                        <dd><input type="password" name="password" id="" size="54" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label></label></dt>
                    </dl>
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Enter" />
                     </dl>
                    
                </fieldset>
                
         </form>
         </div>  
          
	
    
    <div class="footer_login">
    
    	<div class="left_footer_login">IN ADMIN PANEL | Powered by <a href="http://indeziner.com">INDEZINER</a></div>
    	<div class="right_footer_login"><a href="http://indeziner.com"><img src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;?>
images_admin/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

</div>		
</body>
</html><?php }} ?>