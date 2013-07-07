<?php /* Smarty version Smarty 3.1.4, created on 2013-03-17 18:46:58
         compiled from "../backend/views/templates/admin\index_banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2855951467212b35d59-97324356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a734eeec9aca7f114830c81683dddab80182a3db' => 
    array (
      0 => '../backend/views/templates/admin\\index_banner.tpl',
      1 => 1362333403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2855951467212b35d59-97324356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE_TITLE' => 1,
    'baseUrl' => 1,
    'PLEASE_SELECT' => 1,
    'BANNER_TITLE' => 1,
    'BANNER_LINK' => 1,
    'CATEGORY_TITLE' => 1,
    'STATUS_TITLE' => 1,
    'IMAGE_TITLE' => 1,
    'EDIT_TITLE' => 1,
    'DELETE_TITLE' => 1,
    'BANNER_LIST' => 1,
    'START_LOOP' => 1,
    'imagePath' => 1,
    'imageUpload' => 1,
    'NUM_ROW' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_51467212c51e0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51467212c51e0')) {function content_51467212c51e0($_smarty_tpl) {?><div class="title_page"><h2><?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGE_TITLE\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
</h2></div ><div class="">
<a href="<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
banners/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="validateDelete('<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a></div>
<div class="clear-div"></div>  
<form name="adminForm" action="<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
banners/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_TITLE\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_LINK\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TITLE\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'STATUS_TITLE\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'IMAGE_TITLE\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'EDIT_TITLE\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
</th>
            <th scope="col" class="rounded-q4"><?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'DELETE_TITLE\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="7" class="rounded-foot-left"><em></em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
   
    <?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'])) unset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\']);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'name\'] = \'i\';
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'loop\'] = is_array($_loop=$_smarty_tpl->tpl_vars[\'BANNER_LIST\']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>

    <?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php $_smarty_tpl->tpl_vars[\'START_LOOP\'] = new Smarty_variable($_smarty_tpl->tpl_vars[\'START_LOOP\']->value+1, true, 0);?>/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>

    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'START_LOOP\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
" value="<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
" onclick='isChecked(this);' /></td>
            <td><?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'title\'];?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'links\'];?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'catName\'];?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'status\'];?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
</td>
            <td>
            <?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php if ($_smarty_tpl->tpl_vars[\'BANNER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'images\']==\'NULL\'){?>/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>

            <img src="<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
user-noimage.jpg"/>
            <?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php }else{ ?>/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>

            <img src="<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'imageUpload\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
thumb/<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'images\'];?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
"/>
            <?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php }?>/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>

            </td>
            <td><a href="<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
banners/add/id/<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
edit-icon.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
banners/delete/id/<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'id\'];?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
" class="ask"><img src="<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
delete-icon.png" alt="" title="" border="0" /></a></td>
        </tr>
        <?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php endfor; endif; ?>/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>

    </tbody>
</table>
	 <a href="<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
banners/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="validateDelete('<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="<?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'NUM_ROW\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>
"/>
     <input type="hidden" value="0" name="boxchecked"> 
 </form>    
     
        <div class="pagination">
        <?php echo '/*%%SmartyNocache:2855951467212b35d59-97324356%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGINATION_STRING\']->value;?>
/*/%%SmartyNocache:2855951467212b35d59-97324356%%*/';?>

        
        </div> 
     <?php }} ?>