<?php /* Smarty version Smarty 3.1.4, created on 2012-09-06 08:20:34
         compiled from "frontend/views/templates/default\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67395048bf42c240d1-80892238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '67395048bf42c240d1-80892238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cssPath' => 1,
    'jsPath' => 1,
    'ARTICLE_LIST' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5048bf42c4dbb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048bf42c4dbb')) {function content_5048bf42c4dbb($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
Tianyon.css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
ajax.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
ajax-dynamic-content.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
ajax-tooltip.js"></script>
<div id="primary">
            <ul style="list-style:circle outside none;margin:10px;padding:0px">
            <?php echo $_smarty_tpl->tpl_vars['ARTICLE_LIST']->value;?>

            </ul>
        </div>
        
        <?php }} ?>