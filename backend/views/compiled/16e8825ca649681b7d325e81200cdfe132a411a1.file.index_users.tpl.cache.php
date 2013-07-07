<?php /* Smarty version Smarty 3.1.4, created on 2013-03-18 06:05:41
         compiled from "../backend/views/templates/admin\index_users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22400514711259e8853-26051302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16e8825ca649681b7d325e81200cdfe132a411a1' => 
    array (
      0 => '../backend/views/templates/admin\\index_users.tpl',
      1 => 1362331078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22400514711259e8853-26051302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_PAGE_TITLE' => 1,
    'baseUrl' => 1,
    'PLEASE_SELECT' => 1,
    'FULL_NAME_TITLE' => 1,
    'USER_NAME_TITLE' => 1,
    'IMAGE_TITLE' => 1,
    'EDIT_TITLE' => 1,
    'DELETE_TITLE' => 1,
    'USER_LIST' => 1,
    'START_LOOP' => 1,
    'imagePath' => 1,
    'imageUpload' => 1,
    'NUM_ROW' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_51471125b59f4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51471125b59f4')) {function content_51471125b59f4($_smarty_tpl) {?><div class="title_page"><h2><?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_PAGE_TITLE\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
</h2></div ><div class="">
<a href="<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
users/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
<a href="#" class="bt_red" onclick="validateDelete('<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
</div>
<div class="clear-div"></div>  
<form name="adminForm" action="<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
users/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'FULL_NAME_TITLE\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_NAME_TITLE\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'IMAGE_TITLE\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'EDIT_TITLE\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
</th>
            <th scope="col" class="rounded-q4"><?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'DELETE_TITLE\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
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
    
    <?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'])) unset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\']);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'name\'] = \'i\';
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'loop\'] = is_array($_loop=$_smarty_tpl->tpl_vars[\'USER_LIST\']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>

    <?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php $_smarty_tpl->tpl_vars[\'START_LOOP\'] = new Smarty_variable($_smarty_tpl->tpl_vars[\'START_LOOP\']->value+1, true, 0);?>/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>

    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'START_LOOP\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
" value="<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'idUser\'];?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
" onclick='isChecked(this);' /></td>
            <td><?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'fullname\'];?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'username\'];?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
</td>
            <td>
            <?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php if ($_smarty_tpl->tpl_vars[\'USER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'images\']==null){?>/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>

            <img src="<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
no-image.jpg"/>
            <?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php }else{ ?>/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>

            <img src="<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'imageUpload\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
thumb/<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'images\'];?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
"/>
            <?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php }?>/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>

            </td>
            <td><a href="<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
users/add/id/<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'idUser\'];?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
edit-icon.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
users/delete/id/<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'idUser\'];?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
" class="ask"><img src="<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
delete-icon.png" alt="" title="" border="0" /></a></td>
        </tr>
        <?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php endfor; endif; ?>/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
           
    </tbody>
</table>
	 <a href="<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
users/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="validateDelete('<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="<?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'NUM_ROW\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>
"/>
     <input type="hidden" value="0" name="boxchecked"> 
 </form>    
     
        <div class="pagination">
        <?php echo '/*%%SmartyNocache:22400514711259e8853-26051302%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGINATION_STRING\']->value;?>
/*/%%SmartyNocache:22400514711259e8853-26051302%%*/';?>

        
        </div> 
     <?php }} ?>