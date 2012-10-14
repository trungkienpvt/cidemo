<?php /* Smarty version Smarty 3.1.4, created on 2012-10-13 19:01:55
         compiled from "frontend/views/templates/default\headerTop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7779507a1d1360ea32-67853076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6acd19bc47bad9c7fa05d3f31db8e2449989e017' => 
    array (
      0 => 'frontend/views/templates/default\\headerTop.tpl',
      1 => 1338924279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7779507a1d1360ea32-67853076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'COMPUTER_INFO' => 1,
    'COUNT_ITEM_CART' => 1,
    'ITEM_TITLE' => 1,
    'baseUrl' => 1,
    'CART_LINK_HEADER' => 1,
    'RIGHT_HEADER' => 1,
    'MENU_TOP' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_507a1d13646d9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507a1d13646d9')) {function content_507a1d13646d9($_smarty_tpl) {?>			<div id="header">
			<a id="logo" href="">Bored of Southsea</a>
			
			<div id="cart">
			<div id="basket" style="left">
					<?php echo '/*%%SmartyNocache:7779507a1d1360ea32-67853076%%*/<?php echo $_smarty_tpl->tpl_vars[\'COMPUTER_INFO\']->value;?>
/*/%%SmartyNocache:7779507a1d1360ea32-67853076%%*/';?>

                    <span><?php echo '/*%%SmartyNocache:7779507a1d1360ea32-67853076%%*/<?php echo $_smarty_tpl->tpl_vars[\'COUNT_ITEM_CART\']->value;?>
/*/%%SmartyNocache:7779507a1d1360ea32-67853076%%*/';?>
 <?php echo '/*%%SmartyNocache:7779507a1d1360ea32-67853076%%*/<?php echo $_smarty_tpl->tpl_vars[\'ITEM_TITLE\']->value;?>
/*/%%SmartyNocache:7779507a1d1360ea32-67853076%%*/';?>
</span>
					<a href="<?php echo '/*%%SmartyNocache:7779507a1d1360ea32-67853076%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:7779507a1d1360ea32-67853076%%*/';?>
cart"><?php echo '/*%%SmartyNocache:7779507a1d1360ea32-67853076%%*/<?php echo $_smarty_tpl->tpl_vars[\'CART_LINK_HEADER\']->value;?>
/*/%%SmartyNocache:7779507a1d1360ea32-67853076%%*/';?>
</a>
					
				</div>
				<div style="float:right"><?php echo '/*%%SmartyNocache:7779507a1d1360ea32-67853076%%*/<?php echo $_smarty_tpl->tpl_vars[\'RIGHT_HEADER\']->value;?>
/*/%%SmartyNocache:7779507a1d1360ea32-67853076%%*/';?>
</div>
		</div>
			</div>
			<div id="navigation" class="clearFix">
			<?php echo '/*%%SmartyNocache:7779507a1d1360ea32-67853076%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_TOP\']->value;?>
/*/%%SmartyNocache:7779507a1d1360ea32-67853076%%*/';?>


			</div>

			<?php }} ?>