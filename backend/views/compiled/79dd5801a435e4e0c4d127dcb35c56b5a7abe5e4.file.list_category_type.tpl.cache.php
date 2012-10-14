<?php /* Smarty version Smarty 3.1.4, created on 2012-04-14 09:01:31
         compiled from "../backend/views/templates/admin\list_category_type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50404f899f5b0d4390-45774883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79dd5801a435e4e0c4d127dcb35c56b5a7abe5e4' => 
    array (
      0 => '../backend/views/templates/admin\\list_category_type.tpl',
      1 => 1334384164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50404f899f5b0d4390-45774883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LIST_CATEGORY_VALUE' => 0,
    'LIST_CATEGORY_TEXT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f899f5b131d4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f899f5b131d4')) {function content_4f899f5b131d4($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\xampp\htdocs\ciapp\backend\libraries\smarty\libs\plugins\function.html_options.php';
?><?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['LIST_CATEGORY_VALUE']->value,'output'=>$_smarty_tpl->tpl_vars['LIST_CATEGORY_TEXT']->value,'name'=>'type','id'=>'type'),$_smarty_tpl);?>

<?php }} ?>