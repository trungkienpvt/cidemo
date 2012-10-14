<?php /* Smarty version Smarty 3.1.4, created on 2012-10-13 19:01:47
         compiled from "frontend/views/templates/default\index_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28408507a1d0b431801-01433119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '308af9e78d83554068db719c6d1d7255ca12a2e6' => 
    array (
      0 => 'frontend/views/templates/default\\index_product.tpl',
      1 => 1338657031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28408507a1d0b431801-01433119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cssPath' => 1,
    'jsPath' => 1,
    'BREAD_CRUMB' => 1,
    'PRODUCT_ITEM' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_507a1d0b4a647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507a1d0b4a647')) {function content_507a1d0b4a647($_smarty_tpl) {?> <link href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
stickytooltip.js"></script>
 
 <script type="text/javascript" >
 function changeImage(value){
	 $('#imgtooltip').attr("src",value);
	 }
 </script>
 
 <div id="primary1">
            <div >
                <div id="itemCount">
                    <?php echo $_smarty_tpl->tpl_vars['BREAD_CRUMB']->value;?>

                </div>
                <div id="sortable">
                </div>

            </div>
            <div class="productWrap itemInfo">
                <ul>
                <?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value;?>

                </ul>
                <div id="mystickytooltip" class="stickytooltip">
				<div class="atip" id="sticky"><img id="imgtooltip" src="http://localhost/ciapp/data/images/orginal/1334685030ao-ba-lo-nu-AT133-500x500.jpg" alt="" title=""/></div>
				</div>
            </div>
            <div id="primaryFooter">
                <a href="#" class="icon upArrow">Back to top</a>
                <div id="pagination">
        <?php echo $_smarty_tpl->tpl_vars['PAGINATION_STRING']->value;?>

</div>
            </div></div>
     <?php }} ?>