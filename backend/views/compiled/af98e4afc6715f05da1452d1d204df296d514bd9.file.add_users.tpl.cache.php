<?php /* Smarty version Smarty 3.1.4, created on 2012-02-22 07:48:02
         compiled from "application/views/templates/admin\add_users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48054f450022928134-16657874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af98e4afc6715f05da1452d1d204df296d514bd9' => 
    array (
      0 => 'application/views/templates/admin\\add_users.tpl',
      1 => 1327739428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48054f450022928134-16657874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_INFO_TITLE' => 1,
    'baseUrl' => 1,
    'FULLNAME_TITLE' => 1,
    'USER_DATA' => 1,
    'USERNAME_TITLE' => 1,
    'EDIT_FLAG' => 1,
    'EMAIL_TITLE' => 1,
    'PASSWORD_TITLE' => 1,
    'SELECT_STATUS_TITLE' => 1,
    'ACTIVE_TITLE' => 1,
    'UNACTIVE_TITLE' => 1,
    'UPLOAD_TITLE' => 1,
    'SUBMIT_TITLE' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f450022a7e5f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f450022a7e5f')) {function content_4f450022a7e5f($_smarty_tpl) {?><h2><?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_INFO_TITLE\']->value;?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
</h2>
     
         <div class="form">
         <form action="<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
users/save" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="fullname"><?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'FULLNAME_TITLE\']->value;?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="fullname" id="fullname" size="54" value="<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php if ($_smarty_tpl->tpl_vars[\'USER_DATA\']->value!=0){?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_DATA\']->value[\'fullname\'];?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php }?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="ussername"><?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'USERNAME_TITLE\']->value;?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php if ($_smarty_tpl->tpl_vars[\'EDIT_FLAG\']->value==0){?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>

                        <input type="text" name="username" id="username" size="54" value="<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php if ($_smarty_tpl->tpl_vars[\'USER_DATA\']->value!=0){?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_DATA\']->value[\'username\'];?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php }?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
" />
                        <?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php }else{ ?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>

                        <input type="text" name="username"   id="username" size="54" value="<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php if ($_smarty_tpl->tpl_vars[\'USER_DATA\']->value!=0){?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_DATA\']->value[\'username\'];?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php }?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
" />
                        <?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php }?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>

                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="email"><?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'EMAIL_TITLE\']->value;?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="email" id="email" size="54" value="<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php if ($_smarty_tpl->tpl_vars[\'USER_DATA\']->value!=0){?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_DATA\']->value[\'email\'];?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php }?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password"><?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'PASSWORD_TITLE\']->value;?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="password" name="password" id="password" size="54" value="" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="color"><?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'SELECT_STATUS_TITLE\']->value;?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php if ($_smarty_tpl->tpl_vars[\'USER_DATA\']->value!=0){?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>

                        <?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php if ($_smarty_tpl->tpl_vars[\'USER_DATA\']->value[\'status\']==1){?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>

                            <input type="radio" name="status" checked="checked" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
</label>
                            <input type="radio" name="status" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php }else{ ?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>

                         	<input type="radio" name="status" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
</label>
                            <input type="radio" name="status" checked="checked" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php }?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>

                         <?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php }else{ ?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>

                         <input type="radio" name="status"  id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
</label>
                            <input type="radio" name="status" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
</label>
                          <?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php }?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>

                        </dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="image"><?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'UPLOAD_TITLE\']->value;?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
:</label></dt>
                        <dd><input type="file" name="userfile" id="userfile" /></dd>
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBMIT_TITLE\']->value;?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php if ($_smarty_tpl->tpl_vars[\'USER_DATA\']->value!=0){?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_DATA\']->value[\'idUser\'];?>
/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php }else{ ?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
0<?php echo '/*%%SmartyNocache:48054f450022928134-16657874%%*/<?php }?>/*/%%SmartyNocache:48054f450022928134-16657874%%*/';?>
"/>
                
         </form>
         </div>  <?php }} ?>