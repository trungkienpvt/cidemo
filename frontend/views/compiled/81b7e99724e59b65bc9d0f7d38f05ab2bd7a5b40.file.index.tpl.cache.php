<?php /* Smarty version Smarty 3.1.4, created on 2012-10-13 19:01:55
         compiled from "frontend/views/templates/default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31261507a1d134e6d15-09202256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81b7e99724e59b65bc9d0f7d38f05ab2bd7a5b40' => 
    array (
      0 => 'frontend/views/templates/default\\index.tpl',
      1 => 1338922481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31261507a1d134e6d15-09202256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jsPath' => 1,
    'MENU_LEFT' => 1,
    'MESSAGE_SYSTEM_CONTENT' => 1,
    'MESSAGE_SYSTEM_TYPE' => 1,
    'PAGE_TITLE' => 1,
    'BANNER_TOP' => 1,
    'LEFT_CONTENT' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_507a1d135ad95',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507a1d135ad95')) {function content_507a1d135ad95($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>

<script language="javascript" type="text/javascript" src="<?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>
admin/niceforms.js"></script>
<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>
admin/test.js"></script>

<script type="text/javascript">
	
	$(document).ready(function() {

	});
	
</script>

</head>
<body>

	<div id="page">
		<?php echo $_smarty_tpl->getSubTemplate ("headerTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>

		<?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php if ($_smarty_tpl->tpl_vars[\'MENU_LEFT\']->value==1){?>/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>
	
		<div id="productPage" class="contentWrap">
    <div id="innerWrap" class="clearFix">
    
    <?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars[\'layout_content\']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>

    <?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php }else{ ?>/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>

    <div id="categoryPage" class="contentWrap">
    
    <?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php if ($_smarty_tpl->tpl_vars[\'MESSAGE_SYSTEM_CONTENT\']->value!=\'\'){?>/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>
            
    <div id="messageSystem" class="<?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php echo $_smarty_tpl->tpl_vars[\'MESSAGE_SYSTEM_TYPE\']->value;?>
/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>
"><?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php echo $_smarty_tpl->tpl_vars[\'MESSAGE_SYSTEM_CONTENT\']->value;?>
/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>
</div>    
    <?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php }?>/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>

    
<h1><?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGE_TITLE\']->value;?>
/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>
</h1>
    <div id="innerWrap" class="clearFix">
    <div id="primary">
    <?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php if ($_smarty_tpl->tpl_vars[\'BANNER_TOP\']->value==1){?>/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>

    <?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php echo $_smarty_tpl->getSubTemplate ("banner-detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>

    <?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php }?>/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>

    <?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars[\'layout_content\']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>

    </div>
    <?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php echo $_smarty_tpl->tpl_vars[\'LEFT_CONTENT\']->value;?>
/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>

    
    <?php echo '/*%%SmartyNocache:31261507a1d134e6d15-09202256%%*/<?php }?>/*/%%SmartyNocache:31261507a1d134e6d15-09202256%%*/';?>

    
    </div>
</body></html><?php }} ?>