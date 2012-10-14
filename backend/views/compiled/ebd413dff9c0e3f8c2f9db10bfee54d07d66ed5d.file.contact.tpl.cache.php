<?php /* Smarty version Smarty 3.1.4, created on 2012-02-22 07:58:27
         compiled from "application/views/templates/admin\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107204f45029350eba9-09429240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebd413dff9c0e3f8c2f9db10bfee54d07d66ed5d' => 
    array (
      0 => 'application/views/templates/admin\\contact.tpl',
      1 => 1327739902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107204f45029350eba9-09429240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONTACT_INFO_TITLE' => 1,
    'baseUrl' => 1,
    'EMAIL_FROM_TITLE' => 1,
    'EMAIL_TO_TITLE' => 1,
    'SUBJECT_TITLE' => 1,
    'MESSAGE_TITLE' => 1,
    'CAPTCHA_TITLE' => 1,
    'SUBMIT_TITLE' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f45029358ac5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f45029358ac5')) {function content_4f45029358ac5($_smarty_tpl) {?>
<h2><?php echo '/*%%SmartyNocache:107204f45029350eba9-09429240%%*/<?php echo $_smarty_tpl->tpl_vars[\'CONTACT_INFO_TITLE\']->value;?>
/*/%%SmartyNocache:107204f45029350eba9-09429240%%*/';?>
</h2>
     
         <div class="form">
         <form action="<?php echo '/*%%SmartyNocache:107204f45029350eba9-09429240%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:107204f45029350eba9-09429240%%*/';?>
contacts/sendmail" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="emailfrom"><?php echo '/*%%SmartyNocache:107204f45029350eba9-09429240%%*/<?php echo $_smarty_tpl->tpl_vars[\'EMAIL_FROM_TITLE\']->value;?>
/*/%%SmartyNocache:107204f45029350eba9-09429240%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="emailfrom" id="emailfrom" size="54" value="" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="emailto"><?php echo '/*%%SmartyNocache:107204f45029350eba9-09429240%%*/<?php echo $_smarty_tpl->tpl_vars[\'EMAIL_TO_TITLE\']->value;?>
/*/%%SmartyNocache:107204f45029350eba9-09429240%%*/';?>
 :</label></dt>
                        <dd>
                        <input type="text" name="emailto"   id="emailto" size="54" value="" />
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="subject"><?php echo '/*%%SmartyNocache:107204f45029350eba9-09429240%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBJECT_TITLE\']->value;?>
/*/%%SmartyNocache:107204f45029350eba9-09429240%%*/';?>
 :</label></dt>
                        <dd>
                        <input type="text" name="subject"   id="subject" size="54" value="" />
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="message"><?php echo '/*%%SmartyNocache:107204f45029350eba9-09429240%%*/<?php echo $_smarty_tpl->tpl_vars[\'MESSAGE_TITLE\']->value;?>
/*/%%SmartyNocache:107204f45029350eba9-09429240%%*/';?>
 :</label></dt>
                        <dd>
                        <textarea name="message"   id="message" size="54" value="" ></textarea>
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="message"><?php echo '/*%%SmartyNocache:107204f45029350eba9-09429240%%*/<?php echo $_smarty_tpl->tpl_vars[\'CAPTCHA_TITLE\']->value;?>
/*/%%SmartyNocache:107204f45029350eba9-09429240%%*/';?>
 :</label></dt>
                        <dd>
                        <img src="<?php echo '/*%%SmartyNocache:107204f45029350eba9-09429240%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:107204f45029350eba9-09429240%%*/';?>
captcha/getimage/" id="captcha" /> <a href= "javascript:void()" onclick="new_captcha('<?php echo '/*%%SmartyNocache:107204f45029350eba9-09429240%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:107204f45029350eba9-09429240%%*/';?>
captcha/getimage/')"> <img src="<?php echo '/*%%SmartyNocache:107204f45029350eba9-09429240%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:107204f45029350eba9-09429240%%*/';?>
assets/images/refresh.png" /></a>
                        </dd>
                        
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="<?php echo '/*%%SmartyNocache:107204f45029350eba9-09429240%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBMIT_TITLE\']->value;?>
/*/%%SmartyNocache:107204f45029350eba9-09429240%%*/';?>
" />
                     </dl>
                     
                </fieldset>
                
         </form>
         </div>  <?php }} ?>