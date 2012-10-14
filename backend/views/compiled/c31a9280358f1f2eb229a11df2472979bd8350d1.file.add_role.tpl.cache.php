<?php /* Smarty version Smarty 3.1.4, created on 2012-07-30 07:07:40
         compiled from "../backend/views/templates/admin\add_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174705016952ce32e35-25326929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c31a9280358f1f2eb229a11df2472979bd8350d1' => 
    array (
      0 => '../backend/views/templates/admin\\add_role.tpl',
      1 => 1338483235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174705016952ce32e35-25326929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROLE_INFO_TITLE' => 1,
    'baseUrl' => 1,
    'ROLE_NAME' => 1,
    'ROLE_DATA' => 1,
    'ROLE_ORDER' => 1,
    'SUBMIT_TITLE' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5016952ceb72c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5016952ceb72c')) {function content_5016952ceb72c($_smarty_tpl) {?><h2><?php echo '/*%%SmartyNocache:174705016952ce32e35-25326929%%*/<?php echo $_smarty_tpl->tpl_vars[\'ROLE_INFO_TITLE\']->value;?>
/*/%%SmartyNocache:174705016952ce32e35-25326929%%*/';?>
</h2>
     
         <div class="form">
         <form action="<?php echo '/*%%SmartyNocache:174705016952ce32e35-25326929%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:174705016952ce32e35-25326929%%*/';?>
aclrole/save" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="name"><?php echo '/*%%SmartyNocache:174705016952ce32e35-25326929%%*/<?php echo $_smarty_tpl->tpl_vars[\'ROLE_NAME\']->value;?>
/*/%%SmartyNocache:174705016952ce32e35-25326929%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="name" id="name" size="54" value="<?php echo '/*%%SmartyNocache:174705016952ce32e35-25326929%%*/<?php if ($_smarty_tpl->tpl_vars[\'ROLE_DATA\']->value!=0){?>/*/%%SmartyNocache:174705016952ce32e35-25326929%%*/';?>
<?php echo '/*%%SmartyNocache:174705016952ce32e35-25326929%%*/<?php echo $_smarty_tpl->tpl_vars[\'ROLE_DATA\']->value[\'name\'];?>
/*/%%SmartyNocache:174705016952ce32e35-25326929%%*/';?>
<?php echo '/*%%SmartyNocache:174705016952ce32e35-25326929%%*/<?php }?>/*/%%SmartyNocache:174705016952ce32e35-25326929%%*/';?>
" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="parent"><?php echo '/*%%SmartyNocache:174705016952ce32e35-25326929%%*/<?php echo $_smarty_tpl->tpl_vars[\'ROLE_ORDER\']->value;?>
/*/%%SmartyNocache:174705016952ce32e35-25326929%%*/';?>
 :</label></dt>
                        <dd>
                        <input type="text" name="order" id="order" size="54" value="<?php echo '/*%%SmartyNocache:174705016952ce32e35-25326929%%*/<?php if ($_smarty_tpl->tpl_vars[\'ROLE_DATA\']->value!=0){?>/*/%%SmartyNocache:174705016952ce32e35-25326929%%*/';?>
<?php echo '/*%%SmartyNocache:174705016952ce32e35-25326929%%*/<?php echo $_smarty_tpl->tpl_vars[\'ROLE_DATA\']->value[\'roleorder\'];?>
/*/%%SmartyNocache:174705016952ce32e35-25326929%%*/';?>
<?php echo '/*%%SmartyNocache:174705016952ce32e35-25326929%%*/<?php }?>/*/%%SmartyNocache:174705016952ce32e35-25326929%%*/';?>
" />
                        </dd>
                        
                    </dl>
                    
                     <dl class="submit">
                     
                    <input type="submit" name="submit" id="submit" value="<?php echo '/*%%SmartyNocache:174705016952ce32e35-25326929%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBMIT_TITLE\']->value;?>
/*/%%SmartyNocache:174705016952ce32e35-25326929%%*/';?>
" />
                     </dl>
                    </fieldset>
                <input type="hidden" name="id" value="<?php echo '/*%%SmartyNocache:174705016952ce32e35-25326929%%*/<?php if ($_smarty_tpl->tpl_vars[\'ROLE_DATA\']->value!=0){?>/*/%%SmartyNocache:174705016952ce32e35-25326929%%*/';?>
<?php echo '/*%%SmartyNocache:174705016952ce32e35-25326929%%*/<?php echo $_smarty_tpl->tpl_vars[\'ROLE_DATA\']->value[\'id\'];?>
/*/%%SmartyNocache:174705016952ce32e35-25326929%%*/';?>
<?php echo '/*%%SmartyNocache:174705016952ce32e35-25326929%%*/<?php }else{ ?>/*/%%SmartyNocache:174705016952ce32e35-25326929%%*/';?>
0<?php echo '/*%%SmartyNocache:174705016952ce32e35-25326929%%*/<?php }?>/*/%%SmartyNocache:174705016952ce32e35-25326929%%*/';?>
"/>
                
         </form>
         </div>  <?php }} ?>