<?php /* Smarty version Smarty 3.1.4, created on 2013-03-12 12:34:57
         compiled from "../backend/views/templates/admin\index_category_album.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32340513f83611feb77-45413579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89520d90ce698afae5a69cba9f9373195091fed9' => 
    array (
      0 => '../backend/views/templates/admin\\index_category_album.tpl',
      1 => 1339990627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32340513f83611feb77-45413579',
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
    'CATEGORY_LANGUAGE' => 1,
    'EDIT_TITLE' => 1,
    'DELETE_TITLE' => 1,
    'STR_ROW' => 1,
    'NUM_ROW' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_513f8361286d7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f8361286d7')) {function content_513f8361286d7($_smarty_tpl) {?>
<div class="title_page"><h2><?php echo '/*%%SmartyNocache:32340513f83611feb77-45413579%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_PAGE_TITLE\']->value;?>
/*/%%SmartyNocache:32340513f83611feb77-45413579%%*/';?>
</h2></div ><div class="">
<a href="<?php echo '/*%%SmartyNocache:32340513f83611feb77-45413579%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:32340513f83611feb77-45413579%%*/';?>
category_album/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
<a href="#" class="bt_red" onclick="validateDelete('<?php echo '/*%%SmartyNocache:32340513f83611feb77-45413579%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:32340513f83611feb77-45413579%%*/';?>
');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
</div>
<div class="clear-div"></div>  
<form name="adminForm" action="<?php echo '/*%%SmartyNocache:32340513f83611feb77-45413579%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:32340513f83611feb77-45413579%%*/';?>
category_album/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:32340513f83611feb77-45413579%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_NAME\']->value;?>
/*/%%SmartyNocache:32340513f83611feb77-45413579%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:32340513f83611feb77-45413579%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_STATUS\']->value;?>
/*/%%SmartyNocache:32340513f83611feb77-45413579%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:32340513f83611feb77-45413579%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_LANGUAGE\']->value;?>
/*/%%SmartyNocache:32340513f83611feb77-45413579%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:32340513f83611feb77-45413579%%*/<?php echo $_smarty_tpl->tpl_vars[\'EDIT_TITLE\']->value;?>
/*/%%SmartyNocache:32340513f83611feb77-45413579%%*/';?>
</th>
            <th scope="col" class="rounded-q4"><?php echo '/*%%SmartyNocache:32340513f83611feb77-45413579%%*/<?php echo $_smarty_tpl->tpl_vars[\'DELETE_TITLE\']->value;?>
/*/%%SmartyNocache:32340513f83611feb77-45413579%%*/';?>
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
    <?php echo '/*%%SmartyNocache:32340513f83611feb77-45413579%%*/<?php echo $_smarty_tpl->tpl_vars[\'STR_ROW\']->value;?>
/*/%%SmartyNocache:32340513f83611feb77-45413579%%*/';?>

    </tbody>
</table>
	 <a href="<?php echo '/*%%SmartyNocache:32340513f83611feb77-45413579%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:32340513f83611feb77-45413579%%*/';?>
category_album/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="validateDelete('<?php echo '/*%%SmartyNocache:32340513f83611feb77-45413579%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:32340513f83611feb77-45413579%%*/';?>
');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="<?php echo '/*%%SmartyNocache:32340513f83611feb77-45413579%%*/<?php echo $_smarty_tpl->tpl_vars[\'NUM_ROW\']->value;?>
/*/%%SmartyNocache:32340513f83611feb77-45413579%%*/';?>
"/>
     <input type="hidden" value="0" name="boxchecked"> 
 </form>    
     
        <div class="pagination">
        <?php echo '/*%%SmartyNocache:32340513f83611feb77-45413579%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGINATION_STRING\']->value;?>
/*/%%SmartyNocache:32340513f83611feb77-45413579%%*/';?>

        
        </div> 
     <?php }} ?>