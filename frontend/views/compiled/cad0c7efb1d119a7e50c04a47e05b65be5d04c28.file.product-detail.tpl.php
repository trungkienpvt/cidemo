<?php /* Smarty version Smarty 3.1.4, created on 2012-09-06 08:18:14
         compiled from "frontend/views/templates/default\product-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302795048beb66ace77-59979731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cad0c7efb1d119a7e50c04a47e05b65be5d04c28' => 
    array (
      0 => 'frontend/views/templates/default\\product-detail.tpl',
      1 => 1338404192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302795048beb66ace77-59979731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cssPath' => 1,
    'jsPath' => 1,
    'imageUpload' => 1,
    'PRODUCT_DATA' => 1,
    'CLICK_TO_FULL_IMAGE' => 0,
    'baseUrl' => 1,
    'CONTACT_TEXT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5048beb678b8d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048beb678b8d')) {function content_5048beb678b8d($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
stickytooltip.js"></script>
 
 
<div id="primary">
<div class="column" id="display">
            <a class="large" href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['imageUpload']->value;?>
thumbxx/<?php echo $_smarty_tpl->tpl_vars['PRODUCT_DATA']->value['images'];?>
" data-tooltip="sticky" alt="shirt"  /></a>
            <span><?php echo $_smarty_tpl->tpl_vars['CLICK_TO_FULL_IMAGE']->value;?>
</span>
        </div>
        
        <div class="column" id="productInfo">
            <div class="part" id="productHeader">
                <h3><?php echo $_smarty_tpl->tpl_vars['PRODUCT_DATA']->value['name'];?>
</h3>
                <span class="price">VND <?php echo $_smarty_tpl->tpl_vars['PRODUCT_DATA']->value['price'];?>
</span>
                <p><?php echo $_smarty_tpl->tpl_vars['PRODUCT_DATA']->value['content'];?>
</p>
            </div>
            <form method="get" action="/basket/add">
                <div class="part" id="addTo">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
cart/add/id/<?php echo $_smarty_tpl->tpl_vars['PRODUCT_DATA']->value['id'];?>
" class="FancyFormRadio FancyFormRadio-current" style="float:left">Add to  cart</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
product" class="FancyFormRadio FancyFormRadio-current" style="float:left;margin-left:5px">Back to shopping</a>
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['CONTACT_TEXT']->value;?>
 <span>023 9242 6388</span> 
                    </p>
                </div>
            </form>
            <div id="mystickytooltip" class="stickytooltip">
				<div class="atip" id="sticky"><img id="imgtooltip" src="<?php echo $_smarty_tpl->tpl_vars['imageUpload']->value;?>
orginal/<?php echo $_smarty_tpl->tpl_vars['PRODUCT_DATA']->value['images'];?>
" alt="" title=""/></div>
				</div>
<?php }} ?>