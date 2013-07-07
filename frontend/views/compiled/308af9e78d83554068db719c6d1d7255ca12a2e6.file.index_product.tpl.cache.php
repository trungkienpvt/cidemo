<?php /* Smarty version Smarty 3.1.4, created on 2013-03-15 21:51:31
         compiled from "frontend/views/templates/default\index_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170405143fa53e8d077-10798056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '308af9e78d83554068db719c6d1d7255ca12a2e6' => 
    array (
      0 => 'frontend/views/templates/default\\index_product.tpl',
      1 => 1362588329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170405143fa53e8d077-10798056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PRODUCT_ITEM' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5143fa53ea350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5143fa53ea350')) {function content_5143fa53ea350($_smarty_tpl) {?><div class="row">
    <div class="span12">
        <h1 class="featured">Sản phẩm nổi bật</h1>
    </div>
    <!-- /.span12 -->
</div>
<!-- /.row -->
<div class="row products masonry">
<?php echo '/*%%SmartyNocache:170405143fa53e8d077-10798056%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_ITEM\']->value;?>
/*/%%SmartyNocache:170405143fa53e8d077-10798056%%*/';?>

<?php echo '/*%%SmartyNocache:170405143fa53e8d077-10798056%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGINATION_STRING\']->value;?>
/*/%%SmartyNocache:170405143fa53e8d077-10798056%%*/';?>

</div>     <?php }} ?>