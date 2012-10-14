<?php /* Smarty version Smarty 3.1.4, created on 2012-04-14 00:45:45
         compiled from "../backend/views/templates/admin\add_categorytype.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251474f892b29f09282-20295146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2622ba49ea283d09cf3579ce63540281d2249b03' => 
    array (
      0 => '../backend/views/templates/admin\\add_categorytype.tpl',
      1 => 1334370102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251474f892b29f09282-20295146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CATEGORY_TYPE_INFO_TITLE' => 1,
    'baseAdmin' => 1,
    'CATEGORY_TYPE_NAME' => 1,
    'CATEGORY_TYPE_DATA' => 1,
    'SUBMIT_TITLE' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f892b2a0123f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f892b2a0123f')) {function content_4f892b2a0123f($_smarty_tpl) {?><h2><?php echo '/*%%SmartyNocache:251474f892b29f09282-20295146%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TYPE_INFO_TITLE\']->value;?>
/*/%%SmartyNocache:251474f892b29f09282-20295146%%*/';?>
</h2>
     
         <div class="form">
         <form action="<?php echo '/*%%SmartyNocache:251474f892b29f09282-20295146%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseAdmin\']->value;?>
/*/%%SmartyNocache:251474f892b29f09282-20295146%%*/';?>
categorytype/save" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="name"><?php echo '/*%%SmartyNocache:251474f892b29f09282-20295146%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TYPE_NAME\']->value;?>
/*/%%SmartyNocache:251474f892b29f09282-20295146%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="name" id="name" size="54" value="<?php echo '/*%%SmartyNocache:251474f892b29f09282-20295146%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_TYPE_DATA\']->value!=0){?>/*/%%SmartyNocache:251474f892b29f09282-20295146%%*/';?>
<?php echo '/*%%SmartyNocache:251474f892b29f09282-20295146%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TYPE_DATA\']->value[\'name\'];?>
/*/%%SmartyNocache:251474f892b29f09282-20295146%%*/';?>
<?php echo '/*%%SmartyNocache:251474f892b29f09282-20295146%%*/<?php }?>/*/%%SmartyNocache:251474f892b29f09282-20295146%%*/';?>
" /></dd>
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="<?php echo '/*%%SmartyNocache:251474f892b29f09282-20295146%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBMIT_TITLE\']->value;?>
/*/%%SmartyNocache:251474f892b29f09282-20295146%%*/';?>
" />
                     </dl>
                </fieldset>
                <input type="hidden" name="id" value="<?php echo '/*%%SmartyNocache:251474f892b29f09282-20295146%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_TYPE_DATA\']->value!=0){?>/*/%%SmartyNocache:251474f892b29f09282-20295146%%*/';?>
<?php echo '/*%%SmartyNocache:251474f892b29f09282-20295146%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TYPE_DATA\']->value[\'id\'];?>
/*/%%SmartyNocache:251474f892b29f09282-20295146%%*/';?>
<?php echo '/*%%SmartyNocache:251474f892b29f09282-20295146%%*/<?php }else{ ?>/*/%%SmartyNocache:251474f892b29f09282-20295146%%*/';?>
0<?php echo '/*%%SmartyNocache:251474f892b29f09282-20295146%%*/<?php }?>/*/%%SmartyNocache:251474f892b29f09282-20295146%%*/';?>
"/>
         </form>
         </div>  <?php }} ?>