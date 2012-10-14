<?php /* Smarty version Smarty 3.1.4, created on 2012-09-06 08:19:04
         compiled from "frontend/views/templates/default\product-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300475048bee85cdb18-85756581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41da7edd6f1989a4d6da35ef492979449f1e285e' => 
    array (
      0 => 'frontend/views/templates/default\\product-list.tpl',
      1 => 1338654641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300475048bee85cdb18-85756581',
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
  'unifunc' => 'content_5048bee863225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048bee863225')) {function content_5048bee863225($_smarty_tpl) {?> <link href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
stickytooltip.js"></script>
 
 <script type="text/javascript" >
 function changeImage(value){
	 $('#imgtooltip').attr("src",value);
	 }
 </script>
 
 <div id="primary2">
            <div >
                <div id="itemCount">
                    <?php echo $_smarty_tpl->tpl_vars['BREAD_CRUMB']->value;?>

                </div>
                
<!--                <div id="sortable">-->
<!--                    <h5>Sort by</h5>-->
<!--                    <form action="" method="get" accept-charset="utf-8">-->
<!--                        <p class="clearFix"><select name="sort" class="dropdown" rel="dropdown">-->
<!--                            <option value="latest" selected>Latest</option>-->
<!--                            <option value="relevant">Relevant</option>-->
<!--                            <option value="price-low">Price Low-High</option>-->
<!--                            <option value="price-high">Price High-Low</option>-->
<!--                        </select></p>-->
<!--                    </form>-->
<!--                </div>-->
            </div>
            <div class="productWrap itemInfo">
                <ul>
                <?php echo $_smarty_tpl->tpl_vars['PRODUCT_ITEM']->value;?>

                </ul>
                <div id="mystickytooltip" class="stickytooltip">
				<div class="atip" id="sticky"><img id="imgtooltip" src="" alt="" title=""/></div>
				</div>
            </div>
            <div id="primaryFooter">
                <a href="#" class="icon upArrow">Back to top</a>
                <div class="pagination">
        <?php echo $_smarty_tpl->tpl_vars['PAGINATION_STRING']->value;?>

</div>
            </div></div>
     <?php }} ?>