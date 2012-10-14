<?php /* Smarty version Smarty 3.1.4, created on 2012-02-22 07:58:24
         compiled from "application/views/templates/admin\index_album.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111944f450290ca9173-53973704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef99089f028ff04eb31e3a499cb64a1bf92f799f' => 
    array (
      0 => 'application/views/templates/admin\\index_album.tpl',
      1 => 1327739650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111944f450290ca9173-53973704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE_TITLE' => 1,
    'baseUrl' => 1,
    'ALBUM_TITLE' => 1,
    'ALBUM_LINK' => 1,
    'STATUS_TITLE' => 1,
    'IMAGE_TITLE' => 1,
    'EDIT_TITLE' => 1,
    'DELETE_TITLE' => 1,
    'ALBUM_LIST' => 1,
    'START_LOOP' => 1,
    'imagePath' => 1,
    'imageUpload' => 1,
    'URL_ADD_ITEM' => 1,
    'PLEASE_SELECT' => 1,
    'NUM_ROW' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f450290dcec0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f450290dcec0')) {function content_4f450290dcec0($_smarty_tpl) {?><h2><?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGE_TITLE\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
</h2>
                    
<form name="albumForm" action="<?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
albums/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'ALBUM_TITLE\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'ALBUM_LINK\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'STATUS_TITLE\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'IMAGE_TITLE\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'EDIT_TITLE\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
</th>
            <th scope="col" class="rounded-q4"><?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'DELETE_TITLE\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="6" class="rounded-foot-left"><em></em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    
    <?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'])) unset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\']);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'name\'] = \'i\';
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'loop\'] = is_array($_loop=$_smarty_tpl->tpl_vars[\'ALBUM_LIST\']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>

    <?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php $_smarty_tpl->tpl_vars[\'START_LOOP\'] = new Smarty_variable($_smarty_tpl->tpl_vars[\'START_LOOP\']->value+1, true, 0);?>/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>

    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_<?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'START_LOOP\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
" value="<?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'ALBUM_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
" onclick='isChecked(this);' /></td>
            <td><?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'ALBUM_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'title\'];?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'ALBUM_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'links\'];?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'ALBUM_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'status\'];?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
</td>
            <td>
            <?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php if ($_smarty_tpl->tpl_vars[\'ALBUM_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'images\']==\'NULL\'){?>/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>

            <img src="<?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
user-noimage.jpg"/>
            <?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php }else{ ?>/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>

            <img src="<?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'imageUpload\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
thumb/<?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'ALBUM_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'images\'];?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
"/>
            <?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php }?>/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>

            </td>
            <td><a href="<?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
albums/add/id/<?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'ALBUM_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
images_admin/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
albums/delete/id/<?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'ALBUM_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
" class="ask"><img src="<?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
images_admin/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        <?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php endfor; endif; ?>/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>

    </tbody>
</table>
	 <a href="<?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'URL_ADD_ITEM\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="javascript:
if (document.forms['albumForm'].boxchecked.value==0)
{
alert('<?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
');
return false;
}
else
{
document.forms['albumForm'].submit();
}"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="<?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'NUM_ROW\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>
"/>
     <input type="hidden" value="0" name="boxchecked"> 
 </form>    
     
        <div class="pagination">
        <?php echo '/*%%SmartyNocache:111944f450290ca9173-53973704%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGINATION_STRING\']->value;?>
/*/%%SmartyNocache:111944f450290ca9173-53973704%%*/';?>

        
        </div> 
     <?php }} ?>