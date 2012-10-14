<?php /* Smarty version Smarty 3.1.4, created on 2012-09-12 09:45:14
         compiled from "../backend/views/templates/admin\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134555050bc1ad61b79-51167581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bfcf61b8c7778376410e5167a99dd598720e162' => 
    array (
      0 => '../backend/views/templates/admin\\contact.tpl',
      1 => 1338637383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134555050bc1ad61b79-51167581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basePath' => 1,
    'CONTACT_INFO_TITLE' => 1,
    'baseUrl' => 1,
    'EMAIL_FROM_TITLE' => 1,
    'EMAIL_TO_TITLE' => 1,
    'SUBJECT_TITLE' => 1,
    'MESSAGE_TITLE' => 1,
    'MESSAGE_DATA' => 1,
    'CAPTCHA_TITLE' => 1,
    'SUBMIT_TITLE' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5050bc1ade7a0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5050bc1ade7a0')) {function content_5050bc1ade7a0($_smarty_tpl) {?><script src="<?php echo '/*%%SmartyNocache:134555050bc1ad61b79-51167581%%*/<?php echo $_smarty_tpl->tpl_vars[\'basePath\']->value;?>
/*/%%SmartyNocache:134555050bc1ad61b79-51167581%%*/';?>
assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo '/*%%SmartyNocache:134555050bc1ad61b79-51167581%%*/<?php echo $_smarty_tpl->tpl_vars[\'basePath\']->value;?>
/*/%%SmartyNocache:134555050bc1ad61b79-51167581%%*/';?>
assets/ckfinder/ckfinder.js"></script>
<h2><?php echo '/*%%SmartyNocache:134555050bc1ad61b79-51167581%%*/<?php echo $_smarty_tpl->tpl_vars[\'CONTACT_INFO_TITLE\']->value;?>
/*/%%SmartyNocache:134555050bc1ad61b79-51167581%%*/';?>
</h2>
     
         <div class="form">
         <form action="<?php echo '/*%%SmartyNocache:134555050bc1ad61b79-51167581%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:134555050bc1ad61b79-51167581%%*/';?>
contacts/sendmail" method="post" class="niceform1" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="emailfrom"><?php echo '/*%%SmartyNocache:134555050bc1ad61b79-51167581%%*/<?php echo $_smarty_tpl->tpl_vars[\'EMAIL_FROM_TITLE\']->value;?>
/*/%%SmartyNocache:134555050bc1ad61b79-51167581%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="emailfrom" id="emailfrom" size="54" value="" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="emailto"><?php echo '/*%%SmartyNocache:134555050bc1ad61b79-51167581%%*/<?php echo $_smarty_tpl->tpl_vars[\'EMAIL_TO_TITLE\']->value;?>
/*/%%SmartyNocache:134555050bc1ad61b79-51167581%%*/';?>
 :</label></dt>
                        <dd>
                        <input type="text" name="emailto"   id="emailto" size="54" value="" />
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="subject"><?php echo '/*%%SmartyNocache:134555050bc1ad61b79-51167581%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBJECT_TITLE\']->value;?>
/*/%%SmartyNocache:134555050bc1ad61b79-51167581%%*/';?>
 :</label></dt>
                        <dd>
                        <input type="text" name="subject"   id="subject" size="54" value="" />
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="message"><?php echo '/*%%SmartyNocache:134555050bc1ad61b79-51167581%%*/<?php echo $_smarty_tpl->tpl_vars[\'MESSAGE_TITLE\']->value;?>
/*/%%SmartyNocache:134555050bc1ad61b79-51167581%%*/';?>
 :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:134555050bc1ad61b79-51167581%%*/<?php echo $_smarty_tpl->tpl_vars[\'MESSAGE_DATA\']->value;?>
/*/%%SmartyNocache:134555050bc1ad61b79-51167581%%*/';?>

                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="message"><?php echo '/*%%SmartyNocache:134555050bc1ad61b79-51167581%%*/<?php echo $_smarty_tpl->tpl_vars[\'CAPTCHA_TITLE\']->value;?>
/*/%%SmartyNocache:134555050bc1ad61b79-51167581%%*/';?>
 :</label></dt>
                        <dd>
                        <img src="<?php echo '/*%%SmartyNocache:134555050bc1ad61b79-51167581%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:134555050bc1ad61b79-51167581%%*/';?>
captcha/getimage2/" id="captcha" /> <a href= "javascript:void()" onclick="new_captcha('<?php echo '/*%%SmartyNocache:134555050bc1ad61b79-51167581%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:134555050bc1ad61b79-51167581%%*/';?>
captcha/getimage2/')"> <img src="<?php echo '/*%%SmartyNocache:134555050bc1ad61b79-51167581%%*/<?php echo $_smarty_tpl->tpl_vars[\'basePath\']->value;?>
/*/%%SmartyNocache:134555050bc1ad61b79-51167581%%*/';?>
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
                    <input type="submit" name="submit" id="submit" value="<?php echo '/*%%SmartyNocache:134555050bc1ad61b79-51167581%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBMIT_TITLE\']->value;?>
/*/%%SmartyNocache:134555050bc1ad61b79-51167581%%*/';?>
" />
                     </dl>
                     
                </fieldset>
                
         </form>
         </div>  <?php }} ?>