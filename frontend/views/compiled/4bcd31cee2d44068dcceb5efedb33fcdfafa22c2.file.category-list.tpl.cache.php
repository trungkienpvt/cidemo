<?php /* Smarty version Smarty 3.1.4, created on 2013-03-12 12:47:46
         compiled from "frontend/views/templates/default\category-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17415513f8662584dc3-11709132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bcd31cee2d44068dcceb5efedb33fcdfafa22c2' => 
    array (
      0 => 'frontend/views/templates/default\\category-list.tpl',
      1 => 1362525523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17415513f8662584dc3-11709132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CATEGORY_LIST' => 1,
    'baseUrl' => 1,
    'imageUpload' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_513f8662601ef',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f8662601ef')) {function content_513f8662601ef($_smarty_tpl) {?><div class="row">
    <div class="span12">
        <h1 class="featured">Catalog</h1>
    </div>
    <!-- /.span12 -->
</div>
<!-- /.row -->
<div class="row products masonry">
    <?php echo '/*%%SmartyNocache:17415513f8662584dc3-11709132%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'])) unset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\']);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'name\'] = \'i\';
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'loop\'] = is_array($_loop=$_smarty_tpl->tpl_vars[\'CATEGORY_LIST\']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'show\'] = true;
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'max\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'loop\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'step\'] = 1;
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'start\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'step\'] > 0 ? 0 : $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'loop\']-1;
if ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'show\']) {
    $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'total\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'loop\'];
    if ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'total\'] == 0)
        $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'show\'] = false;
} else
    $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'total\'] = 0;
if ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'show\']):

            for ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'index\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'start\'], $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'iteration\'] = 1;
                 $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'iteration\'] <= $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'total\'];
                 $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'index\'] += $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'step\'], $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'iteration\']++):
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'rownum\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'iteration\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'index_prev\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'index\'] - $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'step\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'index_next\'] = $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'index\'] + $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'step\'];
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'first\']      = ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'iteration\'] == 1);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'last\']       = ($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'iteration\'] == $_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'total\']);
?>/*/%%SmartyNocache:17415513f8662584dc3-11709132%%*/';?>

<div class="masonry-item product span3">
    <div class="image">
        <a href="<?php echo '/*%%SmartyNocache:17415513f8662584dc3-11709132%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:17415513f8662584dc3-11709132%%*/';?>
category/<?php echo '/*%%SmartyNocache:17415513f8662584dc3-11709132%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'rid\'];?>
/*/%%SmartyNocache:17415513f8662584dc3-11709132%%*/';?>
/<?php echo '/*%%SmartyNocache:17415513f8662584dc3-11709132%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'catName\'];?>
/*/%%SmartyNocache:17415513f8662584dc3-11709132%%*/';?>
" title="<?php echo '/*%%SmartyNocache:17415513f8662584dc3-11709132%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'catName\'];?>
/*/%%SmartyNocache:17415513f8662584dc3-11709132%%*/';?>
">
            <img src="<?php echo '/*%%SmartyNocache:17415513f8662584dc3-11709132%%*/<?php echo $_smarty_tpl->tpl_vars[\'imageUpload\']->value;?>
/*/%%SmartyNocache:17415513f8662584dc3-11709132%%*/';?>
thumbx/<?php echo '/*%%SmartyNocache:17415513f8662584dc3-11709132%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'images\'];?>
/*/%%SmartyNocache:17415513f8662584dc3-11709132%%*/';?>
" alt="shirt"/>
        </a>
    </div>
    <!-- /.image -->
    <div class="details">
        <a href="<?php echo '/*%%SmartyNocache:17415513f8662584dc3-11709132%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:17415513f8662584dc3-11709132%%*/';?>
category/<?php echo '/*%%SmartyNocache:17415513f8662584dc3-11709132%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'rid\'];?>
/*/%%SmartyNocache:17415513f8662584dc3-11709132%%*/';?>
/<?php echo '/*%%SmartyNocache:17415513f8662584dc3-11709132%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'catName\'];?>
/*/%%SmartyNocache:17415513f8662584dc3-11709132%%*/';?>
">
            <h4 class="title"><?php echo '/*%%SmartyNocache:17415513f8662584dc3-11709132%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'catName\'];?>
/*/%%SmartyNocache:17415513f8662584dc3-11709132%%*/';?>
</h4>
        </a>
    </div>
    <!-- /.details -->
</div>	    					
<?php echo '/*%%SmartyNocache:17415513f8662584dc3-11709132%%*/<?php endfor; endif; ?>/*/%%SmartyNocache:17415513f8662584dc3-11709132%%*/';?>

<?php echo '/*%%SmartyNocache:17415513f8662584dc3-11709132%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGINATION_STRING\']->value;?>
/*/%%SmartyNocache:17415513f8662584dc3-11709132%%*/';?>

</div>       

     <?php }} ?>