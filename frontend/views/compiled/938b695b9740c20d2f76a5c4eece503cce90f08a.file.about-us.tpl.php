<?php /* Smarty version Smarty 3.1.4, created on 2012-09-16 06:56:56
         compiled from "frontend/views/templates/default\about-us.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15835055daa802ec27-23378412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '938b695b9740c20d2f76a5c4eece503cce90f08a' => 
    array (
      0 => 'frontend/views/templates/default\\about-us.tpl',
      1 => 1336789497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15835055daa802ec27-23378412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cssPath' => 1,
    'jsPath' => 1,
    'ARTICLE_DATA' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5055daa809406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5055daa809406')) {function content_5055daa809406($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
Tianyon.css"/>
<script src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
ajax.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
ajax-dynamic-content.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
ajax-tooltip.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
stickytooltip.js"></script>
 
 
<div id="primary">
            <div align="justify"><?php echo $_smarty_tpl->tpl_vars['ARTICLE_DATA']->value['content'];?>
</div>
        </div>
        
        <?php }} ?>