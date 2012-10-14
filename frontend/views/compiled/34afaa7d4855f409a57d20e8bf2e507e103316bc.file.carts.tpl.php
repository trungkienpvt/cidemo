<?php /* Smarty version Smarty 3.1.4, created on 2012-10-13 19:01:55
         compiled from "frontend/views/templates/default\carts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19040507a1d13689c18-16615842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '19040507a1d13689c18-16615842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BREAD_CRUMB' => 1,
    'form_cart' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_507a1d136e808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507a1d136e808')) {function content_507a1d136e808($_smarty_tpl) {?> 
  <div id="primary1">
  <div id="itemCount">
                    <?php echo $_smarty_tpl->tpl_vars['BREAD_CRUMB']->value;?>

                </div>
                <div id="sortable">
                </div>
  
            <div class="productWrap itemInfo">
            <?php echo $_smarty_tpl->tpl_vars['form_cart']->value;?>

            </div>
            <div id="primaryFooter">
                <a href="#" class="icon upArrow">Back to top</a>
            </div></div>
 
 
     <?php }} ?>