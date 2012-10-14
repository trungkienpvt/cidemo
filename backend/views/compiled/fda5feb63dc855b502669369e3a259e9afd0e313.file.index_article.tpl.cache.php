<?php /* Smarty version Smarty 3.1.4, created on 2012-09-12 09:44:50
         compiled from "../backend/views/templates/admin\index_article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290725050bc02b05a08-37141789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda5feb63dc855b502669369e3a259e9afd0e313' => 
    array (
      0 => '../backend/views/templates/admin\\index_article.tpl',
      1 => 1339989104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290725050bc02b05a08-37141789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ARTICLE_PAGE_TITLE' => 1,
    'baseUrl' => 1,
    'PLEASE_SELECT' => 1,
    'TITLE_TITLE' => 1,
    'DESCRIPTION_TITLE' => 1,
    'CATEGORY_TITLE' => 1,
    'IMAGE_TITLE' => 1,
    'DATE_CREATE_TITLE' => 1,
    'ARR_LANG' => 1,
    'lang' => 1,
    'EDIT_TITLE' => 1,
    'DELETE_TITLE' => 1,
    'COUNT_LANG' => 1,
    'COLSPAN' => 1,
    'ARTICLE_LIST' => 1,
    'START_LOOP' => 1,
    'imagePath' => 1,
    'imageUpload' => 1,
    'TRANSLATED_STATUS' => 1,
    'TRANSLATE_STATUS' => 1,
    'NUM_ROW' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5050bc02c810a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5050bc02c810a')) {function content_5050bc02c810a($_smarty_tpl) {?><div class="title_page"><h2><?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_PAGE_TITLE\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
</h2></div ><div class="">
<a href="<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
articles/add" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
<a href="#" class="bt_red" onclick="validateDelete('<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>                    
</div>
<div class="clear-div"></div>  
<form name="adminForm" action="<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
articles/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'TITLE_TITLE\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'DESCRIPTION_TITLE\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TITLE\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'IMAGE_TITLE\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
</th>
            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'DATE_CREATE_TITLE\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
</th>
            <?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php  $_smarty_tpl->tpl_vars[\'lang\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'lang\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'ARR_LANG\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'lang\']->key => $_smarty_tpl->tpl_vars[\'lang\']->value){
$_smarty_tpl->tpl_vars[\'lang\']->_loop = true;
?>/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>

            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
</th>
            <?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php } ?>/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>

            <th scope="col" class="rounded"><?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'EDIT_TITLE\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
</th>
            <th scope="col" class="rounded-q4"><?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'DELETE_TITLE\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
    		<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php $_smarty_tpl->tpl_vars[\'COLSPAN\'] = new Smarty_variable(8+$_smarty_tpl->tpl_vars[\'COUNT_LANG\']->value, true, 0);?>/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>

        	<td colspan="<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'COLSPAN\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
" class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    
    <?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\'])) unset($_smarty_tpl->tpl_vars[\'smarty\']->value[\'section\'][\'i\']);
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
?>/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>

    <?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php $_smarty_tpl->tpl_vars[\'START_LOOP\'] = new Smarty_variable($_smarty_tpl->tpl_vars[\'START_LOOP\']->value+1, true, 0);?>/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>

    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'START_LOOP\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
" value="<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'idArticle\'];?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
" onclick='isChecked(this);' /></td>
            <td><?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'title\'];?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'description\'];?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
</td>
            <td><?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'catName\'];?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
</td>
            <td>
            <?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'image\']==null){?>/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>

            <img src="<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
no-image.jpg"/>
            <?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php }else{ ?>/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>

            <img src="<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'imageUpload\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
thumb/<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'image\'];?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
"/>
            <?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php }?>/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>

            </td>
            <td><?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'datetime\'];?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
</td>
            <?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php  $_smarty_tpl->tpl_vars[\'lang\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'lang\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'ARR_LANG\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'lang\']->key => $_smarty_tpl->tpl_vars[\'lang\']->value){
$_smarty_tpl->tpl_vars[\'lang\']->_loop = true;
?>/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>

            <td>
            <?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][$_smarty_tpl->tpl_vars[\'lang\']->value]!=0){?>/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>

            <?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'TRANSLATED_STATUS\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>

            <?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php }else{ ?>/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>

            <a href="<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
articles/add/id/<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'idArticle\'];?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
/translate/1/lang/<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
"><?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'TRANSLATE_STATUS\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
</a>
            <?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php }?>/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>

            </td>
            <?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php } ?>/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>

            <td><a href="<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
articles/add/id/<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'idArticle\'];?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
images_admin/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
articles/delete/id/<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_LIST\']->value[$_smarty_tpl->getVariable(\'smarty\')->value[\'section\'][\'i\'][\'index\']][\'idArticle\'];?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
" class="ask"><img src="<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
images_admin/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        <?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php endfor; endif; ?>/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
           
    </tbody>
</table>
	 <a href="<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
articles/add" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="validateDelete('<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'PLEASE_SELECT\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="<?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'NUM_ROW\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>
"/>
     <input type="hidden" value="0" name="boxchecked"> 
 </form>    
     
        <div class="pagination">
        <?php echo '/*%%SmartyNocache:290725050bc02b05a08-37141789%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGINATION_STRING\']->value;?>
/*/%%SmartyNocache:290725050bc02b05a08-37141789%%*/';?>

        
        </div> 
     <?php }} ?>