<?php /* Smarty version Smarty 3.1.4, created on 2012-04-14 09:01:24
         compiled from "../backend/views/templates/admin\index_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106484f899f54074924-30305433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51938c27228931ea8c064d383c7b3a23a63a63cd' => 
    array (
      0 => '../backend/views/templates/admin\\index_category.tpl',
      1 => 1332338390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106484f899f54074924-30305433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE_TITLE' => 1,
    'baseUrl' => 1,
    'CATEGORY_NAME' => 1,
    'CATEGORY_STATUS' => 1,
    'CATEGORY_LANGUAGE' => 1,
    'EDIT_TITLE' => 1,
    'DELETE_TITLE' => 1,
    'STR_ROW' => 1,
    'baseAdmin' => 1,
    'PLEASE_SELECT' => 1,
    'NUM_ROW' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f899f540e5a5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f899f540e5a5')) {function content_4f899f540e5a5($_smarty_tpl) {?><h2><?php echo '/*%%SmartyNocache:106484f899f54074924-30305433%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGE_TITLE\']->value;?>
/*/%%SmartyNocache:106484f899f54074924-30305433%%*/';?>
</h2>
                    
<form name="categoryForm" action="<?php echo '/*%%SmartyNocache:106484f899f54074924-30305433%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:106484f899f54074924-30305433%%*/';?>
category/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:106484f899f54074924-30305433%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_NAME\']->value;?>
/*/%%SmartyNocache:106484f899f54074924-30305433%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:106484f899f54074924-30305433%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_STATUS\']->value;?>
/*/%%SmartyNocache:106484f899f54074924-30305433%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:106484f899f54074924-30305433%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_LANGUAGE\']->value;?>
/*/%%SmartyNocache:106484f899f54074924-30305433%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:106484f899f54074924-30305433%%*/<?php echo $_smarty_tpl->tpl_vars[\'EDIT_TITLE\']->value;?>
/*/%%SmartyNocache:106484f899f54074924-30305433%%*/';?>
</th>
            <th scope="col" class="rounded-q4"><?php echo '/*%%SmartyNocache:106484f899f54074924-30305433%%*/<?php echo $_smarty_tpl->tpl_vars[\'DELETE_TITLE\']->value;?>
/*/%%SmartyNocache:106484f899f54074924-30305433%%*/';?>
</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="5" class="rounded-foot-left"><em></em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    <?php echo '/*%%SmartyNocache:106484f899f54074924-30305433%%*/<?php echo $_smarty_tpl->tpl_vars[\'STR_ROW\']->value;?>
/*/%%SmartyNocache:106484f899f54074924-30305433%%*/';?>

    </tbody>
</table>
	 <a href="<?php echo '/*%%SmartyNocache:106484f899f54074924-30305433%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseAdmin\']->value;?>
/*/%%SmartyNocache:106484f899f54074924-30305433%%*/';?>
category/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="javascript:
if (document.forms['categoryForm'].boxchecked.value==0)
{
alert('<?php echo '/*%%SmartyNocache:106484f899f54074924-30305433%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:106484f899f54074924-30305433%%*/';?>
');
return false;
}
else
{
 var confirms = confirm('Do you want to delete it now?');
	if(confirms)
		document.forms['categoryForm'].submit();
}"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="<?php echo '/*%%SmartyNocache:106484f899f54074924-30305433%%*/<?php echo $_smarty_tpl->tpl_vars[\'NUM_ROW\']->value;?>
/*/%%SmartyNocache:106484f899f54074924-30305433%%*/';?>
"/>
     <input type="hidden" value="0" name="boxchecked"> 
 </form>    
     
        <div class="pagination">
        <?php echo '/*%%SmartyNocache:106484f899f54074924-30305433%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGINATION_STRING\']->value;?>
/*/%%SmartyNocache:106484f899f54074924-30305433%%*/';?>

        
        </div> 
     <?php }} ?>