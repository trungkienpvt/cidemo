<?php /* Smarty version Smarty 3.1.4, created on 2013-03-15 21:51:31
         compiled from "frontend/views/templates/default\headerTop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64835143fa53e40064-20374526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6acd19bc47bad9c7fa05d3f31db8e2449989e017' => 
    array (
      0 => 'frontend/views/templates/default\\headerTop.tpl',
      1 => 1362587398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64835143fa53e40064-20374526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imagePath' => 1,
    'baseUrl' => 1,
    'COUNT_ITEM_CART' => 1,
    'MENU_TOP' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5143fa53e77be',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5143fa53e77be')) {function content_5143fa53e77be($_smarty_tpl) {?><header id="header" class="row">
    <div class="span12 clearfix">
        <div class="logo">
            <a href="index.htm" ><img src="<?php echo '/*%%SmartyNocache:64835143fa53e40064-20374526%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:64835143fa53e40064-20374526%%*/';?>
logo.png" alt="" /></a>
        </div>
        <!-- /.logo -->	
        <section class="fr searchform" style="margin:0 0 15px;">
            <form method="get" action="http://noithat2.webdepqua.com/tim" enctype="multipart/form-data">
                <input value="Go" class="submit" type="submit" />
                <input class="text" name="q" type="text" />
            </form>
        </section>
        <!-- /.span6 -->
        <div class="cart-summary">
            <a href="<?php echo '/*%%SmartyNocache:64835143fa53e40064-20374526%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:64835143fa53e40064-20374526%%*/';?>
cart""  class="clearfix">
                <div class="icon">View cart</div>
                <div class="details">
                    <span class="note">Giỏ hàng</span>
                    <span class="item-count"><span style="color:red"><?php echo '/*%%SmartyNocache:64835143fa53e40064-20374526%%*/<?php echo $_smarty_tpl->tpl_vars[\'COUNT_ITEM_CART\']->value;?>
/*/%%SmartyNocache:64835143fa53e40064-20374526%%*/';?>
</span> sản phẩm</span>
                </div>
                <!-- /.details -->
            </a>
        </div>
        <!-- /.cart-summary -->
    </div>
    <!-- /.span12 -->
</header>
<!-- /#header.row -->
<?php echo '/*%%SmartyNocache:64835143fa53e40064-20374526%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_TOP\']->value;?>
/*/%%SmartyNocache:64835143fa53e40064-20374526%%*/';?>


			<?php }} ?>