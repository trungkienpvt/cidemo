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
  'variables' => 
  array (
    'LIST_CATEGORY_VALUE' => 0,
    'LIST_CATEGORY_TEXT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f899f5b1454a',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f899f5b1454a')) {function content_4f899f5b1454a($_smarty_tpl) {?><select name="type" id="type">
<option value="0" id="type-0">--Choise--</option>
<option value="90" id="type-1">News</option>
</select>

<?php }} ?>