<?php /* Smarty version Smarty 3.1.4, created on 2013-03-17 18:46:41
         compiled from "../backend/views/templates/admin\index_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2804151467201bc16c6-05840824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '376e924e955c2f43e254cc3ccd9bcdf81e100ae1' => 
    array (
      0 => '../backend/views/templates/admin\\index_menu.tpl',
      1 => 1339990025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2804151467201bc16c6-05840824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU_MANAGER' => 1,
    'baseUrl' => 1,
    'PLEASE_SELECT' => 1,
    'MENU_NAME' => 1,
    'MENU_STATUS' => 1,
    'MENU_IMAGE' => 1,
    'MENU_ORDER' => 1,
    'MENU_LANGUAGE' => 1,
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
  'unifunc' => 'content_51467201c6e61',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51467201c6e61')) {function content_51467201c6e61($_smarty_tpl) {?><div class="title_page"><h2><?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_MANAGER\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
</h2></div ><div class="">
<a href="<?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
menu/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
<a href="#" class="bt_red" onclick="validateDelete('<?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
</div>
<div class="clear-div"></div>  
<form name="adminForm" action="<?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
menu/delete" method="post">                    
<table id="rounded-corner"  summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_NAME\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_STATUS\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_IMAGE\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_ORDER\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_LANGUAGE\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
</th>
            <?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php  $_smarty_tpl->tpl_vars[\'lang\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'lang\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'ARR_LANG\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'lang\']->key => $_smarty_tpl->tpl_vars[\'lang\']->value){
$_smarty_tpl->tpl_vars[\'lang\']->_loop = true;
?>/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>

            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
</th>
            <?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php } ?>/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>

            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'EDIT_TITLE\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
</th>
            <th scope="col" class="rounded-q4"><?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'DELETE_TITLE\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
    	<?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php $_smarty_tpl->tpl_vars[\'COLSPAN\'] = new Smarty_variable(7+$_smarty_tpl->tpl_vars[\'COUNT_LANG\']->value, true, 0);?>/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>

        	<td colspan="<?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'COLSPAN\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
" class="rounded-foot-left"><em></em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    <?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'STR_ROW\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>

    </tbody>
</table>
	 <a href="<?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
menu/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="validateDelete('<?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="<?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'NUM_ROW\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
"/>
     <input type="hidden" value="0" name="boxchecked">
     <input type="hidden" id="action_form" value="<?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>
menu/updateorder" name="action_form"/> 
 </form>    
     
        <div class="pagination">
        <?php echo '/*%%SmartyNocache:2804151467201bc16c6-05840824%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGINATION_STRING\']->value;?>
/*/%%SmartyNocache:2804151467201bc16c6-05840824%%*/';?>

        
        </div> 
     <?php }} ?>