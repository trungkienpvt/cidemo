<?php /* Smarty version Smarty 3.1.4, created on 2013-03-12 12:47:56
         compiled from "frontend/views/templates/default\product-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1153513f866c06cd41-42036745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41da7edd6f1989a4d6da35ef492979449f1e285e' => 
    array (
      0 => 'frontend/views/templates/default\\product-list.tpl',
      1 => 1362526168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1153513f866c06cd41-42036745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BREAD_CRUMB' => 1,
    'PRODUCT_ITEM' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_513f866c09281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f866c09281')) {function content_513f866c09281($_smarty_tpl) {?><div class="row">
    <div class="span12">
    <div class="lead-sub">
    <?php echo '/*%%SmartyNocache:1153513f866c06cd41-42036745%%*/<?php echo $_smarty_tpl->tpl_vars[\'BREAD_CRUMB\']->value;?>
/*/%%SmartyNocache:1153513f866c06cd41-42036745%%*/';?>

</div>
    </div>
    <!-- /.span12 -->
</div>
<!-- /.row -->
<div class="row products masonry">
<?php echo '/*%%SmartyNocache:1153513f866c06cd41-42036745%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_ITEM\']->value;?>
/*/%%SmartyNocache:1153513f866c06cd41-42036745%%*/';?>

<?php echo '/*%%SmartyNocache:1153513f866c06cd41-42036745%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGINATION_STRING\']->value;?>
/*/%%SmartyNocache:1153513f866c06cd41-42036745%%*/';?>

</div><?php }} ?>