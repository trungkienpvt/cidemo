<?php /* Smarty version Smarty 3.1.4, created on 2012-02-22 07:58:25
         compiled from "application/views/templates/admin\index_article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210634f450291cf15e2-42772307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b717f6aa7429d56b62b283c806be67c031909f5' => 
    array (
      0 => 'application/views/templates/admin\\index_article.tpl',
      1 => 1327739556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210634f450291cf15e2-42772307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ARTICLE_PAGE_TITLE' => 1,
    'baseUrl' => 1,
    'TITLE_TITLE' => 1,
    'DESCRIPTION_TITLE' => 1,
    'IMAGE_TITLE' => 1,
    'DATE_CREATE_TITLE' => 1,
    'EDIT_TITLE' => 1,
    'DELETE_TITLE' => 1,
    'ARTICLE_LIST' => 1,
    'START_LOOP' => 1,
    'imagePath' => 1,
    'imageUpload' => 1,
    'PLEASE_SELECT' => 1,
    'NUM_ROW' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f450291e0c99',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f450291e0c99')) {function content_4f450291e0c99($_smarty_tpl) {?><h2><?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_PAGE_TITLE\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
</h2> 
                    
<form name="articleForm" action="<?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
admin_articles/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'TITLE_TITLE\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'DESCRIPTION_TITLE\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'IMAGE_TITLE\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'DATE_CREATE_TITLE\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'EDIT_TITLE\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
</th>
            <th scope="col" class="rounded-q4"><?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'DELETE_TITLE\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
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
    
    <?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'])) unset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\']);
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'name\'] = \'i\';
$_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'][\'loop\'] = is_array($_loop=$_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>

    <?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php $_smarty_tpl->tpl_vars[\'START_LOOP\'] = new Smarty_variable($_smarty_tpl->tpl_vars[\'START_LOOP\']->value+1, true, 0);?>/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>

    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_<?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'START_LOOP\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
" value="<?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'idArticle\'];?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
" onclick='isChecked(this);' /></td>
            <td><?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'title\'];?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'description\'];?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
</td>
            <td>
            <?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'image\']==\'NULL\'){?>/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>

            <img src="<?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
user-noimage.jpg"/>
            <?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php }else{ ?>/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>

            <img src="<?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'imageUpload\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
thumb/<?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'image\'];?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
"/>
            <?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php }?>/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>

            </td>
            <td><?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'datetime\'];?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
</td>
            <td><a href="<?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
admin_articles/add/id/<?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'idArticle\'];?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
images_admin/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
admin_articles/delete/id/<?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'idArticle\'];?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
" class="ask"><img src="<?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
images_admin/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        <?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php endfor; endif; ?>/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
           
    </tbody>
</table>
	 <a href="<?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
admin_articles/add" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="javascript:
if (document.forms['articleForm'].boxchecked.value==0)
{
alert('<?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
');
return false;
}
else
{
document.forms['articleForm'].submit();
}"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="<?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'NUM_ROW\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>
"/>
     <input type="hidden" value="0" name="boxchecked"> 
 </form>    
     
        <div class="pagination">
        <?php echo '/*%%SmartyNocache:210634f450291cf15e2-42772307%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGINATION_STRING\']->value;?>
/*/%%SmartyNocache:210634f450291cf15e2-42772307%%*/';?>

        
        </div> 
     <?php }} ?>