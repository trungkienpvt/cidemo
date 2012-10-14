<?php /* Smarty version Smarty 3.1.4, created on 2012-04-14 07:26:23
         compiled from "../backend/views/templates/admin\index_categorytype.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19354f89890fed3099-47736570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08cfe40d0ef53cf1e5a1f09c9308ca6339efffe0' => 
    array (
      0 => '../backend/views/templates/admin\\index_categorytype.tpl',
      1 => 1334370313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19354f89890fed3099-47736570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE_TITLE' => 1,
    'baseUrl' => 1,
    'CATEGORY_TYPE_NAME' => 1,
    'EDIT_TITLE' => 1,
    'DELETE_TITLE' => 1,
    'CATEGORY_TYPE_LIST' => 1,
    'START_LOOP' => 1,
    'baseAdmin' => 1,
    'imagePath' => 1,
    'PLEASE_SELECT' => 1,
    'NUM_ROW' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f89891005a65',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f89891005a65')) {function content_4f89891005a65($_smarty_tpl) {?><h2><?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGE_TITLE\']->value;?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
</h2>
                    
<form name="adminForm" action="<?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
category/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TYPE_NAME\']->value;?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'EDIT_TITLE\']->value;?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
</th>
            <th scope="col" class="rounded-q4"><?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'DELETE_TITLE\']->value;?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="3" class="rounded-foot-left"><em></em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    <?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'])) unset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\']);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'name\'] = \'i\';
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'loop\'] = is_array($_loop=$_smarty_tpl->tpl_vars[\'CATEGORY_TYPE_LIST\']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>

    <?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php $_smarty_tpl->tpl_vars[\'START_LOOP\'] = new Smarty_variable($_smarty_tpl->tpl_vars[\'START_LOOP\']->value+1, true, 0);?>/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>

    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_<?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'START_LOOP\']->value;?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
" value="<?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TYPE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
" onclick='isChecked(this);' /></td>
            <td><?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TYPE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'name\'];?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
</td>
            <td><a href="<?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseAdmin\']->value;?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
categorytype/add/id/<?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TYPE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
images_admin/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseAdmin\']->value;?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
categorytype/delete/id/<?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TYPE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
" class="ask"><img src="<?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
images_admin/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        <?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php endfor; endif; ?>/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>

    </tbody>
</table>
	 <a href="<?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseAdmin\']->value;?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
categorytype/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="javascript:
if (document.forms['adminForm'].boxchecked.value==0)
{
alert('<?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
');
return false;
}
else
{
 var confirms = confirm('Do you want to delete it now?');
	if(confirms)
		document.forms['adminForm'].submit();
}"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="<?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'NUM_ROW\']->value;?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>
"/>
     <input type="hidden" value="0" name="boxchecked"> 
 </form>    
     
        <div class="pagination">
        <?php echo '/*%%SmartyNocache:19354f89890fed3099-47736570%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGINATION_STRING\']->value;?>
/*/%%SmartyNocache:19354f89890fed3099-47736570%%*/';?>

        
        </div> 
     <?php }} ?>