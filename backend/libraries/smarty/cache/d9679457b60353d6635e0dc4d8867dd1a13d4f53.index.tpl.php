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
    '0a70c20f3a07343367131cb000e371229377c73f' => 
    array (
      0 => '../backend/views/templates/admin\\header.tpl',
      1 => 1347453905,
      2 => 'file',
    ),
    '4bfcf61b8c7778376410e5167a99dd598720e162' => 
    array (
      0 => '../backend/views/templates/admin\\contact.tpl',
      1 => 1338637383,
      2 => 'file',
    ),
    'dd9164b8e0bd9d1975016521746077cf442f74e8' => 
    array (
      0 => '../backend/views/templates/admin\\footer.tpl',
      1 => 1337271066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249375050bc1ac2caf8-11404201',
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
  'unifunc' => 'content_5050bc1ae153d',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5050bc1ae153d')) {function content_5050bc1ae153d($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
admin_style.css" />
<!--<link rel="stylesheet" type="text/css" media="all" href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
admin_niceforms-default.css" />-->
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
    <?php echo $_smarty_tpl->tpl_vars['RIGHT_HEADER']->value;?>

    
    
    <div class="main_content">
    
                    <div class="menu">
                    <?php echo $_smarty_tpl->tpl_vars['MENU_TOP']->value;?>

                    </ul>
                    </div> 
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    
    
    <div class="right_content">
    <?php if ($_smarty_tpl->tpl_vars['MESSAGE_SYSTEM_CONTENT']->value!=''){?>            
    <div id="messageSystem" class="<?php echo $_smarty_tpl->tpl_vars['MESSAGE_SYSTEM_TYPE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MESSAGE_SYSTEM_CONTENT']->value;?>
</div>    
    <?php }?>
    <script src="<?php echo $_smarty_tpl->tpl_vars['basePath']->value;?>
assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['basePath']->value;?>
assets/ckfinder/ckfinder.js"></script>
<h2><?php echo $_smarty_tpl->tpl_vars['CONTACT_INFO_TITLE']->value;?>
</h2>
     
         <div class="form">
         <form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
contacts/sendmail" method="post" class="niceform1" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="emailfrom"><?php echo $_smarty_tpl->tpl_vars['EMAIL_FROM_TITLE']->value;?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="emailfrom" id="emailfrom" size="54" value="" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="emailto"><?php echo $_smarty_tpl->tpl_vars['EMAIL_TO_TITLE']->value;?>
 :</label></dt>
                        <dd>
                        <input type="text" name="emailto"   id="emailto" size="54" value="" />
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="subject"><?php echo $_smarty_tpl->tpl_vars['SUBJECT_TITLE']->value;?>
 :</label></dt>
                        <dd>
                        <input type="text" name="subject"   id="subject" size="54" value="" />
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="message"><?php echo $_smarty_tpl->tpl_vars['MESSAGE_TITLE']->value;?>
 :</label></dt>
                        <dd>
                        <?php echo $_smarty_tpl->tpl_vars['MESSAGE_DATA']->value;?>

                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="message"><?php echo $_smarty_tpl->tpl_vars['CAPTCHA_TITLE']->value;?>
 :</label></dt>
                        <dd>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
captcha/getimage2/" id="captcha" /> <a href= "javascript:void()" onclick="new_captcha('<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
captcha/getimage2/')"> <img src="<?php echo $_smarty_tpl->tpl_vars['basePath']->value;?>
assets/images/refresh.png" /></a>
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="message"></label></dt>
                        <dd>
                        <input type="text" name="captcha" id="captcha" />
                        </dd>
                        
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT_TITLE']->value;?>
" />
                     </dl>
                     
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	<div class="footer">
    
    	<div class="left_footer">IN ADMIN PANEL | Powered by <a href="">INDEZINER</a></div>
<div class="right_footer"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;?>
images_admin/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

</div>		</body>
</html><?php }} ?>