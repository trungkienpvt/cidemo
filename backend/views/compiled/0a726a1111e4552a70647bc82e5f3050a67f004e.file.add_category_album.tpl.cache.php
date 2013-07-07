<?php /* Smarty version Smarty 3.1.4, created on 2013-03-12 12:18:18
         compiled from "../backend/views/templates/admin\add_category_album.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3935513f7f7a915119-73507507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a726a1111e4552a70647bc82e5f3050a67f004e' => 
    array (
      0 => '../backend/views/templates/admin\\add_category_album.tpl',
      1 => 1362205202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3935513f7f7a915119-73507507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CATEGORY_INFO_TITLE' => 1,
    'baseUrl' => 1,
    'CATEGORY_NAME' => 1,
    'CATEGORY_DATA' => 1,
    'CATEGORY_PARENT' => 1,
    'LIST_CATGORY_VALUE' => 0,
    'LIST_CATGORY_TEXT' => 0,
    'MY_SELECT' => 1,
    'SELECT_STATUS_TITLE' => 1,
    'ACTIVE_TITLE' => 1,
    'UNACTIVE_TITLE' => 1,
    'CATEGORY_TAB' => 1,
    'SUBMIT_TITLE' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_513f7f7aa3593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f7f7aa3593')) {function content_513f7f7aa3593($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'E:\xampp\htdocs\ciapp\backend\libraries\smarty\libs\plugins\function.html_options.php\';
?>/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
<h1><?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_INFO_TITLE\']->value;?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
</h1>
     
         <div class="form">
         <form action="<?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
category_album/save" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="name"><?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_NAME\']->value;?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="name" tabindex="1" id="name" size="54" value="<?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value!=0){?>/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
<?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value[\'catName\'];?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
<?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php }?>/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="parent"><?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_PARENT\']->value;?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
 :</label></dt>
                        <dd>
                        <div id="category_parent">
                        <?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo smarty_function_html_options(array(\'values\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_VALUE\']->value,\'output\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_TEXT\']->value,\'name\'=>\'parent\',\'selected\'=>$_smarty_tpl->tpl_vars[\'MY_SELECT\']->value,\'tabindex\'=>"2"),$_smarty_tpl);?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>

                        </div>
                        </dd>
                        
                    </dl>
                    
                    <dl>
                        <dt><label for="color"><?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'SELECT_STATUS_TITLE\']->value;?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value!=0){?>/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>

                        <?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value[\'status\']==1){?>/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>

                            <input type="radio" name="status" tabindex="3" checked="checked" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
</label>
                            <input type="radio" name="status" tabindex="4" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php }else{ ?>/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>

                         	<input type="radio" name="status" tabindex="3" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
</label>
                            <input type="radio" name="status" tabindex="4" checked="checked" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php }?>/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>

                         <?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php }else{ ?>/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>

                         <input type="radio" name="status" tabindex="3"  id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
</label>
                            <input type="radio" name="status" tabindex="4" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
</label>
                          <?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php }?>/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>

                        </dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="image"><?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TAB\']->value;?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
:</label></dt>
                        <dd><input type="text" name="tab" tabindex="5" id="tab" /></dd>
                    </dl> 
                     <dl class="submit">
                     
                    <input type="submit" name="submit" tabindex="6" id="submit" value="<?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBMIT_TITLE\']->value;?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="<?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value!=0){?>/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
<?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value[\'idCategory\'];?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
<?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php }else{ ?>/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
0<?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php }?>/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
"/>
                <input type="hidden" name="lerver" value="<?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value!=0){?>/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
<?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value[\'lever\'];?>
/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
<?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php }else{ ?>/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
0<?php echo '/*%%SmartyNocache:3935513f7f7a915119-73507507%%*/<?php }?>/*/%%SmartyNocache:3935513f7f7a915119-73507507%%*/';?>
"/>
                
         </form>
         </div>  <?php }} ?>