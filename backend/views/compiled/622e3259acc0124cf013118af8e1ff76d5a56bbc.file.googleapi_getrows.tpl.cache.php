<?php /* Smarty version Smarty 3.1.4, created on 2012-02-20 11:05:19
         compiled from "application/views/templates/default\googleapi_getrows.tpl" */ ?>
<?php /*%%SmartyHeaderCode:310064f428b5f56b027-27425709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '622e3259acc0124cf013118af8e1ff76d5a56bbc' => 
    array (
      0 => 'application/views/templates/default\\googleapi_getrows.tpl',
      1 => 1329673617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310064f428b5f56b027-27425709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 1,
    'foo' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f428b5f59ebb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f428b5f59ebb')) {function content_4f428b5f59ebb($_smarty_tpl) {?><h1>Introduction to Google's API</h1>
<?php echo '/*%%SmartyNocache:310064f428b5f56b027-27425709%%*/<?php  $_smarty_tpl->tpl_vars[\'foo\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'foo\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'data\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'foo\']->key => $_smarty_tpl->tpl_vars[\'foo\']->value){
$_smarty_tpl->tpl_vars[\'foo\']->_loop = true;
?>/*/%%SmartyNocache:310064f428b5f56b027-27425709%%*/';?>

<?php echo '/*%%SmartyNocache:310064f428b5f56b027-27425709%%*/<?php echo $_smarty_tpl->tpl_vars[\'foo\']->value[\'firstname\'];?>
/*/%%SmartyNocache:310064f428b5f56b027-27425709%%*/';?>

<br/>
<?php echo '/*%%SmartyNocache:310064f428b5f56b027-27425709%%*/<?php echo $_smarty_tpl->tpl_vars[\'foo\']->value[\'lastname\'];?>
/*/%%SmartyNocache:310064f428b5f56b027-27425709%%*/';?>

<br/>
<?php echo '/*%%SmartyNocache:310064f428b5f56b027-27425709%%*/<?php echo $_smarty_tpl->tpl_vars[\'foo\']->value[\'email\'];?>
/*/%%SmartyNocache:310064f428b5f56b027-27425709%%*/';?>

<?php echo '/*%%SmartyNocache:310064f428b5f56b027-27425709%%*/<?php } ?>/*/%%SmartyNocache:310064f428b5f56b027-27425709%%*/';?>

<?php }} ?>