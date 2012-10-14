<?php /* Smarty version Smarty 3.1.4, created on 2012-09-06 08:20:37
         compiled from "frontend/views/templates/default\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135005048bf45c9a517-58158204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d06c6e04809e34d4747894cd3c9b7ea5f41e939' => 
    array (
      0 => 'frontend/views/templates/default\\contact.tpl',
      1 => 1337225538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135005048bf45c9a517-58158204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseUrl' => 1,
    'BREAD_CRUMB' => 1,
    'EMAIL_FROM_TITLE' => 1,
    'EMAIL_TO_TITLE' => 1,
    'SUBJECT_TITLE' => 1,
    'MESSAGE_TITLE' => 1,
    'CAPTCHA_TITLE' => 1,
    'basePath' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5048bf45cfd5a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048bf45cfd5a')) {function content_5048bf45cfd5a($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/ckfinder/ckfinder.js"></script>

<script>
function submitForm(){
	$("#formContact").submit();
	
}
</script>

<div id="primary">
<div id="" class="clearFix">
<div id="itemCount">
                    <?php echo $_smarty_tpl->tpl_vars['BREAD_CRUMB']->value;?>

                </div>
                <div id="sortable">
                </div>
<div class="productWrap">                
<form action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
contacts/sendmail" id="formContact" method="post" class="" enctype="multipart/form-data">
<table id="freecontactform" class="freecontactform">
<tr><td><?php echo $_smarty_tpl->tpl_vars['EMAIL_FROM_TITLE']->value;?>
</td><td><input type="text" name="emailfrom" id="emailfrom" size="54" value="" /></td></tr>
<tr><td><?php echo $_smarty_tpl->tpl_vars['EMAIL_TO_TITLE']->value;?>
</td><td><input type="text" name="emailto"   id="emailto" size="54" value="" /></td></tr>
<tr><td><?php echo $_smarty_tpl->tpl_vars['SUBJECT_TITLE']->value;?>
</td><td><input type="text" name="subject"   id="subject" size="54" value="" /></td></tr>
<tr><td><?php echo $_smarty_tpl->tpl_vars['MESSAGE_TITLE']->value;?>
</td><td><textarea name="message" rows="10" cols="50" ></textarea></td></tr>
<tr><td><?php echo $_smarty_tpl->tpl_vars['CAPTCHA_TITLE']->value;?>
</td><td><span style="width:250px;float:left;margin-left:10px"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
captcha/getimage2/" id="captcha" /></span style="float:left"><span><a href= "javascript:void()" onclick="new_captcha('<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
captcha/getimage2/')"> <img src="<?php echo $_smarty_tpl->tpl_vars['basePath']->value;?>
assets/images/refresh.png" /></a></span></td></tr>
<tr><td></td><td ><input type="text" name="captcha" id="captcha" /></td></tr>
<tr><td colspan="2">
<a style="float:left;margin-right:10px" class="FancyFormRadio FancyFormRadio-current" onclick="submitForm()" href="javascript:void(0)">Send</a>
</td></tr>
</table>         
</form>
</div>
</div></div><?php }} ?>