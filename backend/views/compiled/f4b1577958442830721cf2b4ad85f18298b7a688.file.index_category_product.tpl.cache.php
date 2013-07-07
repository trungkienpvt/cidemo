<?php /* Smarty version Smarty 3.1.4, created on 2013-03-17 18:35:49
         compiled from "../backend/views/templates/admin\index_category_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2909351466f758ba889-53119768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4b1577958442830721cf2b4ad85f18298b7a688' => 
    array (
      0 => '../backend/views/templates/admin\\index_category_product.tpl',
      1 => 1339989907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2909351466f758ba889-53119768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CATEGORY_PAGE_TITLE' => 1,
    'baseUrl' => 1,
    'PLEASE_SELECT' => 1,
    'CATEGORY_NAME' => 1,
    'CATEGORY_STATUS' => 1,
    'CATEGORY_IMAGE' => 1,
    'CATEGORY_ORDER' => 1,
    'CATEGORY_LANGUAGE' => 1,
    'ARR_LANG' => 1,
    'lang' => 1,
    'EDIT_TITLE' => 1,
    'DELETE_TITLE' => 1,
    'COUNT_LANG' => 1,
    'COLSPAN' => 1,
    'STR_ROW' => 1,
    'NUM_ROW' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_51466f7597459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51466f7597459')) {function content_51466f7597459($_smarty_tpl) {?><div class="title_page"><h2><?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_PAGE_TITLE\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
</h2></div ><div class="">
<a href="<?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
category_product/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
<a href="#" class="bt_red" onclick="validateDelete('<?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
<div class="clear-div"></div>  
<form name="adminForm" action="<?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
category_product/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_NAME\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_STATUS\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_IMAGE\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_ORDER\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_LANGUAGE\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
</th>
            <?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php  $_smarty_tpl->tpl_vars[\'lang\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'lang\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'ARR_LANG\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'lang\']->key => $_smarty_tpl->tpl_vars[\'lang\']->value){
$_smarty_tpl->tpl_vars[\'lang\']->_loop = true;
?>/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>

            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
</th>
            <?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php } ?>/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>

            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'EDIT_TITLE\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
</th>
            <th scope="col" class="rounded-q4"><?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'DELETE_TITLE\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
    	<?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php $_smarty_tpl->tpl_vars[\'COLSPAN\'] = new Smarty_variable(7+$_smarty_tpl->tpl_vars[\'COUNT_LANG\']->value, true, 0);?>/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>

        	<td colspan="<?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'COLSPAN\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
" class="rounded-foot-left"><em></em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    <?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'STR_ROW\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>

    </tbody>
</table>
	 <a href="<?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
category_product/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="validateDelete('<?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="<?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'NUM_ROW\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
"/>
     <input type="hidden" value="0" name="boxchecked">
     <input type="hidden" id="action_form" value="<?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>
category_product/updateorder" name="action_form"/> 
 </form>    
     
        <div class="pagination">
        <?php echo '/*%%SmartyNocache:2909351466f758ba889-53119768%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGINATION_STRING\']->value;?>
/*/%%SmartyNocache:2909351466f758ba889-53119768%%*/';?>

        
        </div> 
     <?php }} ?>