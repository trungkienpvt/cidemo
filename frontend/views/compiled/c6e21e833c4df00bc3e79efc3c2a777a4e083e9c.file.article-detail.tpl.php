<?php /* Smarty version Smarty 3.1.4, created on 2012-09-06 08:04:42
         compiled from "frontend/views/templates/default\article-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:318695048bb8a26fc49-81394663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6e21e833c4df00bc3e79efc3c2a777a4e083e9c' => 
    array (
      0 => 'frontend/views/templates/default\\article-detail.tpl',
      1 => 1338817201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318695048bb8a26fc49-81394663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cssPath' => 1,
    'jsPath' => 1,
    'ARTICLE_DATA' => 1,
    'MORE_ARITCLE' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5048bb8a2b17e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048bb8a2b17e')) {function content_5048bb8a2b17e($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
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
			<div id="primaryFooter">
                <a class="icon upArrow" href="#">More article</a>
                <div class="pagination">
        
</div>
            </div>			      
                    <ul style="list-style:circle outside none;margin:10px;padding:0px">
                                
            	<?php echo $_smarty_tpl->tpl_vars['MORE_ARITCLE']->value;?>

            </ul>
        </div>
        
        <?php }} ?>