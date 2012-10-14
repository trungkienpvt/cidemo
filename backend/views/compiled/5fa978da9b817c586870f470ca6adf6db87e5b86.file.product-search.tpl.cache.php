<?php /* Smarty version Smarty 3.1.4, created on 2012-06-27 10:11:18
         compiled from "../backend/views/templates/admin\product-search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167304feb3eb67207d7-73262947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fa978da9b817c586870f470ca6adf6db87e5b86' => 
    array (
      0 => '../backend/views/templates/admin\\product-search.tpl',
      1 => 1338824470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167304feb3eb67207d7-73262947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PRODUCT_PAGE_TITLE' => 1,
    'baseUrl' => 1,
    'LIST_CATGORY_VALUE' => 0,
    'LIST_CATGORY_TEXT' => 0,
    'MY_SELECT' => 1,
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
    'PLEASE_SELECT' => 1,
    'NUM_ROW' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4feb3eb69086e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4feb3eb69086e')) {function content_4feb3eb69086e($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'E:\xampp\htdocs\ciapp\backend\libraries\smarty\libs\plugins\function.html_options.php\';
?>/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
<div class="title_page"><h2><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_PAGE_TITLE\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</h2></div ><div class="title_page_right">
<form name="frmsearch" action="<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
product/search" method="post">
<input type="text" name="txtsearch" id="txtsearch" placeholder="text search" />
<span>Category</span>    <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo smarty_function_html_options(array(\'values\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_VALUE\']->value,\'output\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_TEXT\']->value,\'name\'=>\'category\',\'selected\'=>$_smarty_tpl->tpl_vars[\'MY_SELECT\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

</form>
</div>
<div class="clear-div"></div>  
                    
<form name="adminForm" action="<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
product/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'NAME_TITLE\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'DESCRIPTION_TITLE\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'IMAGE_TITLE\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'DATE_CREATE_TITLE\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRICE_TITLE\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'ORDERING_TITLE\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TITLE\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</th>
            <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php  $_smarty_tpl->tpl_vars[\'lang\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'lang\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'ARR_LANG\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'lang\']->key => $_smarty_tpl->tpl_vars[\'lang\']->value){
$_smarty_tpl->tpl_vars[\'lang\']->_loop = true;
?>/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</th>
            <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php } ?>/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'EDIT_TITLE\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</th>
            <th scope="col" class="rounded-q4"><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'DELETE_TITLE\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
    	<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php $_smarty_tpl->tpl_vars[\'COLSPAN\'] = new Smarty_variable(9+$_smarty_tpl->tpl_vars[\'COUNT_LANG\']->value, true, 0);?>/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

        	<td colspan="<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'COLSPAN\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
" class="rounded-foot-left"><em></em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'])) unset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\']);
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
?>/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

    <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php $_smarty_tpl->tpl_vars[\'START_LOOP\'] = new Smarty_variable($_smarty_tpl->tpl_vars[\'START_LOOP\']->value+1, true, 0);?>/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'START_LOOP\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
" value="<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
" onclick='isChecked(this);' /></td>
            <td><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'name\'];?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'description\'];?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</td>
            <td>
            <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php if ($_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'images\']==null){?>/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

            <img src="<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
no-image.jpg"/>
            <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php }else{ ?>/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

            <img src="<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'imageUpload\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
thumb/<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'images\'];?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
"/>
            <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php }?>/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

            </td>
            <td><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'createdate\'];?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'price\'];?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'ordering\'];?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'catName\'];?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</td>
            <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php  $_smarty_tpl->tpl_vars[\'lang\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'lang\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'ARR_LANG\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'lang\']->key => $_smarty_tpl->tpl_vars[\'lang\']->value){
$_smarty_tpl->tpl_vars[\'lang\']->_loop = true;
?>/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

            <td>
            <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php if ($_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][$_smarty_tpl->tpl_vars[\'lang\']->value]!=0){?>/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

            <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'TRANSLATED_STATUS\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

            <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php }else{ ?>/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

            <a href="<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
product/add/id/<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
/translate/1/lang/<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
"><?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'TRANSLATE_STATUS\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
</a>
            <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php }?>/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

            </td>
            <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php } ?>/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

            <td><a href="<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
product/add/id/<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
images_admin/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
product/delete/id/<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
" class="ask"><img src="<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
images_admin/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php endfor; endif; ?>/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

    </tbody>
</table>
	 <a href="<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
product/add" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="javascript:
if (document.forms['adminForm'].boxchecked.value==0)
{
alert('<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
');
return false;
}
else
{
	var confirms = confirm('Do you want to delete it now?');
	if(confirms)
		document.forms['adminForm'].submit();
}"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="<?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'NUM_ROW\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>
"/>
     <input type="hidden" value="0" name="boxchecked"> 
     
 </form>    
     
        <div class="pagination">
        <?php echo '/*%%SmartyNocache:167304feb3eb67207d7-73262947%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGINATION_STRING\']->value;?>
/*/%%SmartyNocache:167304feb3eb67207d7-73262947%%*/';?>

        
        </div> 
     <?php }} ?>