<?php /* Smarty version Smarty 3.1.4, created on 2013-03-12 11:12:27
         compiled from "frontend/views/templates/default\carts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14511513f700b5c14b2-82097270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34afaa7d4855f409a57d20e8bf2e507e103316bc' => 
    array (
      0 => 'frontend/views/templates/default\\carts.tpl',
      1 => 1338133708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14511513f700b5c14b2-82097270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BREAD_CRUMB' => 1,
    'form_cart' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_513f700b5e69c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f700b5e69c')) {function content_513f700b5e69c($_smarty_tpl) {?> 
  <div id="primary1">
  <div id="itemCount">
                    <?php echo '/*%%SmartyNocache:14511513f700b5c14b2-82097270%%*/<?php echo $_smarty_tpl->tpl_vars[\'BREAD_CRUMB\']->value;?>
/*/%%SmartyNocache:14511513f700b5c14b2-82097270%%*/';?>

                </div>
                <div id="sortable">
                </div>
  
            <div class="productWrap itemInfo">
            <?php echo '/*%%SmartyNocache:14511513f700b5c14b2-82097270%%*/<?php echo $_smarty_tpl->tpl_vars[\'form_cart\']->value;?>
/*/%%SmartyNocache:14511513f700b5c14b2-82097270%%*/';?>

            </div>
            <div id="primaryFooter">
                <a href="#" class="icon upArrow">Back to top</a>
            </div></div>
 
 
     <?php }} ?>