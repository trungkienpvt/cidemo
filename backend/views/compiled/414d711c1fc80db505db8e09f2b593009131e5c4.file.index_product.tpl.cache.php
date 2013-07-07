<?php /* Smarty version Smarty 3.1.4, created on 2013-03-17 18:46:40
         compiled from "../backend/views/templates/admin\index_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242475146720017abb1-71069672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '414d711c1fc80db505db8e09f2b593009131e5c4' => 
    array (
      0 => '../backend/views/templates/admin\\index_product.tpl',
      1 => 1341332053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242475146720017abb1-71069672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PRODUCT_PAGE_TITLE' => 1,
    'baseUrl' => 1,
    'LIST_CATGORY_VALUE' => 0,
    'LIST_CATGORY_TEXT' => 0,
    'PLEASE_SELECT' => 1,
    'NAME_TITLE' => 1,
    'DESCRIPTION_TITLE' => 1,
    'IMAGE_TITLE' => 1,
    'DATE_CREATE_TITLE' => 1,
    'PRICE_TITLE' => 1,
    'ORDERING_TITLE' => 1,
    'CATEGORY_TITLE' => 1,
    'ARR_LANG' => 1,
    'lang' => 1,
    'EDIT_TITLE' => 1,
    'DELETE_TITLE' => 1,
    'COUNT_LANG' => 1,
    'COLSPAN' => 1,
    'PRODUCT_LIST' => 1,
    'START_LOOP' => 1,
    'imagePath' => 1,
    'imageUpload' => 1,
    'TRANSLATED_STATUS' => 1,
    'TRANSLATE_STATUS' => 1,
    'NUM_ROW' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5146720032bad',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5146720032bad')) {function content_5146720032bad($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\xampp\htdocs\ciapp\backend\libraries\smarty\libs\plugins\function.html_options.php';
?><div class="title_page"><h2><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_PAGE_TITLE\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</h2></div ><div class="title_page_right">
<form name="frmsearch" action="<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
product/search" method="post">
<input type="text" name="txtsearch" tabindex="1" id="txtsearch" placeholder="text search" />
<span>Category</span>    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['LIST_CATGORY_VALUE']->value,'output'=>$_smarty_tpl->tpl_vars['LIST_CATGORY_TEXT']->value,'name'=>'category','tabindex'=>"2"),$_smarty_tpl);?>

</form>
</div>
<div style="float:right">
<a href="<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
product/add" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
<a href="#" class="bt_red" onclick="validateDelete('<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
</div>
<div class="clear-div"></div>  
                    
<form name="adminForm" action="<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
product/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'NAME_TITLE\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'DESCRIPTION_TITLE\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'IMAGE_TITLE\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'DATE_CREATE_TITLE\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRICE_TITLE\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'ORDERING_TITLE\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TITLE\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</th>
            <?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php  $_smarty_tpl->tpl_vars[\'lang\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'lang\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'ARR_LANG\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'lang\']->key => $_smarty_tpl->tpl_vars[\'lang\']->value){
$_smarty_tpl->tpl_vars[\'lang\']->_loop = true;
?>/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</th>
            <?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php } ?>/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'EDIT_TITLE\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</th>
            <th scope="col" class="rounded-q4"><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'DELETE_TITLE\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
    	<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php $_smarty_tpl->tpl_vars[\'COLSPAN\'] = new Smarty_variable(9+$_smarty_tpl->tpl_vars[\'COUNT_LANG\']->value, true, 0);?>/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

        	<td colspan="<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'COLSPAN\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
" class="rounded-foot-left"><em></em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    <?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'])) unset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\']);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'name\'] = \'i\';
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'loop\'] = is_array($_loop=$_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

    <?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php $_smarty_tpl->tpl_vars[\'START_LOOP\'] = new Smarty_variable($_smarty_tpl->tpl_vars[\'START_LOOP\']->value+1, true, 0);?>/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'START_LOOP\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
" value="<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
" onclick='isChecked(this);' /></td>
            <td><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'name\'];?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'description\'];?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</td>
            <td>
            <?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php if ($_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'images\']==null){?>/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

            <img src="<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
no-image.jpg"/>
            <?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php }else{ ?>/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

            <img src="<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'imageUpload\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
thumb/<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'images\'];?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
"/>
            <?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php }?>/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

            </td>
            <td><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'createdate\'];?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'price\'];?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'ordering\'];?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'catName\'];?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</td>
            <?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php  $_smarty_tpl->tpl_vars[\'lang\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'lang\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'ARR_LANG\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'lang\']->key => $_smarty_tpl->tpl_vars[\'lang\']->value){
$_smarty_tpl->tpl_vars[\'lang\']->_loop = true;
?>/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

            <td>
            <?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php if ($_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][$_smarty_tpl->tpl_vars[\'lang\']->value]!=0){?>/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

            <?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'TRANSLATED_STATUS\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

            <?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php }else{ ?>/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

            <a href="<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
product/add/id/<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
/translate/1/lang/<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
"><?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'TRANSLATE_STATUS\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
</a>
            <?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php }?>/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

            </td>
            <?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php } ?>/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

            <td><a href="<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
product/add/id/<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
images_admin/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
product/delete/id/<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
" class="ask"><img src="<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
images_admin/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        <?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php endfor; endif; ?>/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

    </tbody>
</table>
	 <a href="<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
product/add" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="validateDelete('<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="<?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'NUM_ROW\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>
"/>
     <input type="hidden" value="0" name="boxchecked"> 
     
 </form>    
     
        <div class="pagination">
        <?php echo '/*%%SmartyNocache:242475146720017abb1-71069672%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGINATION_STRING\']->value;?>
/*/%%SmartyNocache:242475146720017abb1-71069672%%*/';?>

        
        </div> 
     <?php }} ?>