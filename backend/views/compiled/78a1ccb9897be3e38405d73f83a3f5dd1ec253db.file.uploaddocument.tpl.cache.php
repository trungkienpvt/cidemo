<?php /* Smarty version Smarty 3.1.4, created on 2012-02-19 07:46:25
         compiled from "application/views/templates/default\uploaddocument.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157034f410b4100f2a9-14971050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78a1ccb9897be3e38405d73f83a3f5dd1ec253db' => 
    array (
      0 => 'application/views/templates/default\\uploaddocument.tpl',
      1 => 1325231134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157034f410b4100f2a9-14971050',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f410b41015b5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f410b41015b5')) {function content_4f410b41015b5($_smarty_tpl) {?><form enctype="multipart/form-data" method="post">
<input type="file" name="myfile">
<input type="submit" value="submit"/>
</form>
<?php }} ?>