<?php /* Smarty version Smarty 3.1.4, created on 2013-03-12 12:37:43
         compiled from "frontend/views/templates/default\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13033513f8407961736-61075657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c58a09d3490538725f149b17a724559f16fd0b8' => 
    array (
      0 => 'frontend/views/templates/default\\article.tpl',
      1 => 1338818035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13033513f8407961736-61075657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cssPath' => 1,
    'jsPath' => 1,
    'ARTICLE_LIST' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_513f84079912b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f84079912b')) {function content_513f84079912b($_smarty_tpl) {?><link href="<?php echo '/*%%SmartyNocache:13033513f8407961736-61075657%%*/<?php echo $_smarty_tpl->tpl_vars[\'cssPath\']->value;?>
/*/%%SmartyNocache:13033513f8407961736-61075657%%*/';?>
stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:13033513f8407961736-61075657%%*/<?php echo $_smarty_tpl->tpl_vars[\'cssPath\']->value;?>
/*/%%SmartyNocache:13033513f8407961736-61075657%%*/';?>
Tianyon.css"/>
<script src="<?php echo '/*%%SmartyNocache:13033513f8407961736-61075657%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:13033513f8407961736-61075657%%*/';?>
ajax.js"></script>
<script src="<?php echo '/*%%SmartyNocache:13033513f8407961736-61075657%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:13033513f8407961736-61075657%%*/';?>
ajax-dynamic-content.js"></script>
<script src="<?php echo '/*%%SmartyNocache:13033513f8407961736-61075657%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:13033513f8407961736-61075657%%*/';?>
ajax-tooltip.js"></script>
<div id="primary">
            <ul style="list-style:circle outside none;margin:10px;padding:0px">
            <?php echo '/*%%SmartyNocache:13033513f8407961736-61075657%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value;?>
/*/%%SmartyNocache:13033513f8407961736-61075657%%*/';?>

            </ul>
        </div>
        
        <?php }} ?>