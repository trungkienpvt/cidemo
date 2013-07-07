<?php /* Smarty version Smarty 3.1.4, created on 2013-03-17 18:31:50
         compiled from "../backend/views/templates/admin\add_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:875151466e869542f6-27370328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd7850d903e10826b995005daad4ab4b15fad6e8' => 
    array (
      0 => '../backend/views/templates/admin\\add_menu.tpl',
      1 => 1362205279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '875151466e869542f6-27370328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jsPath' => 1,
    'SCRIPT_PREVIEW' => 1,
    'MENU_INFO_TITLE' => 1,
    'baseUrl' => 1,
    'MENU_NAME' => 1,
    'MENU_DATA' => 1,
    'MENU_LINK' => 1,
    'IMPORT_TITLE' => 1,
    'MENU_PARENT' => 1,
    'LIST_CATGORY_VALUE' => 0,
    'LIST_CATGORY_TEXT' => 0,
    'MY_SELECT' => 1,
    'SELECT_STATUS_TITLE' => 1,
    'ACTIVE_TITLE' => 1,
    'UNACTIVE_TITLE' => 1,
    'MENU_TAB' => 1,
    'IMAGE_TITLE' => 1,
    'basePath' => 1,
    'SUBMIT_TITLE' => 1,
    'TRANSLATE_STATUS' => 1,
    'LANGUAGE_TRANSLATE' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_51466e86b1a4d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51466e86b1a4d')) {function content_51466e86b1a4d($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'E:\xampp\htdocs\ciapp\backend\libraries\smarty\libs\plugins\function.html_options.php\';
?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<script src="<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
admin/ajaxupload.js"></script>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'SCRIPT_PREVIEW\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>

<h1><?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_INFO_TITLE\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
</h1>
     
         <div class="form">
         <form action="<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
menu/save" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="name"><?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_NAME\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="name" tabindex="1" id="name" size="54" value="<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php if ($_smarty_tpl->tpl_vars[\'MENU_DATA\']->value!=0){?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_DATA\']->value[\'menuName\'];?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="name"><?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_LINK\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="url" tabindex="2" id="url" size="54" value="<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php if ($_smarty_tpl->tpl_vars[\'MENU_DATA\']->value!=0){?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_DATA\']->value[\'url\'];?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
" />
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="name">&nbsp</dt>
                        <dd><input type="button" onclick="showListArticle('<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
articles/loadlist')" name="submit" tabindex="3" id="submit" value="<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'IMPORT_TITLE\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
" /></dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="parent"><?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_PARENT\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
 :</label></dt>
                        <dd>
                        <div id="category_parent">
                        <?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo smarty_function_html_options(array(\'values\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_VALUE\']->value,\'output\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_TEXT\']->value,\'name\'=>\'parent\',\'selected\'=>$_smarty_tpl->tpl_vars[\'MY_SELECT\']->value,\'tabindex\'=>"4"),$_smarty_tpl);?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>

                        </div>
                        </dd>
                        
                    </dl>
                    
                    <dl>
                        <dt><label for="color"><?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'SELECT_STATUS_TITLE\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php if ($_smarty_tpl->tpl_vars[\'MENU_DATA\']->value!=0){?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>

                        <?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php if ($_smarty_tpl->tpl_vars[\'MENU_DATA\']->value[\'status\']==1){?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>

                            <input type="radio" name="status" tabindex="5" checked="checked" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
</label>
                            <input type="radio" name="status" tabindex="6" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }else{ ?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>

                         	<input type="radio" name="status" tabindex="5" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
</label>
                            <input type="radio" name="status" tabindex="6" checked="checked" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>

                         <?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }else{ ?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>

                         <input type="radio" name="status" tabindex="5" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
</label>
                            <input type="radio" name="status" tabindex="6" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
</label>
                          <?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>

                        </dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="image"><?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_TAB\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
:</label></dt>
                        <dd><input type="text" name="tab" tabindex="7" id="tab" value="<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php if ($_smarty_tpl->tpl_vars[\'MENU_DATA\']->value!=0){?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_DATA\']->value[\'tab\'];?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="image"><?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'IMAGE_TITLE\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
:</label></dt>
                        <dd><input type="file" name="userfile" tabindex="8" id="userfile"  /></dd>
                    </dl>
                    <dl>
                        <dt><label for="preview"></label></dt>
                        <div id="upload-div"></div>
                        <div id="loader_overlay" class="loader_overlay_BG"></div>
						<div id="loader" class="loading">Loading</div>
                        <div id='preview'>
                        <?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php if ($_smarty_tpl->tpl_vars[\'MENU_DATA\']->value!=0){?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>

                        <img src="<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'basePath\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
data/images/thumb/<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_DATA\']->value[\'images\'];?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
"/>
                        <?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>

                        </div>
                    </dl>
                     <dl class="submit">
                     
                    <input type="submit" name="submit" tabindex="9" id="submit" value="<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBMIT_TITLE\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php if ($_smarty_tpl->tpl_vars[\'MENU_DATA\']->value!=0){?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_DATA\']->value[\'idMenu\'];?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }else{ ?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
0<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
"/>
                <input type="hidden" name="lerver" value="<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php if ($_smarty_tpl->tpl_vars[\'MENU_DATA\']->value!=0){?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_DATA\']->value[\'lever\'];?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }else{ ?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
0<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
"/>
                <input type="hidden" name="previewphoto" id="previewphoto" value=""/>
                <input type="hidden" name="rid" value="<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php if ($_smarty_tpl->tpl_vars[\'MENU_DATA\']->value!=0){?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_DATA\']->value[\'rid\'];?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }else{ ?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
0<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
"/>
                <input type="hidden" name="image_link" value="<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php if ($_smarty_tpl->tpl_vars[\'MENU_DATA\']->value!=0){?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_DATA\']->value[\'images\'];?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
"/>
                <input type="hidden" name="translate" value="<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php if ($_smarty_tpl->tpl_vars[\'TRANSLATE_STATUS\']->value!=\'\'){?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'TRANSLATE_STATUS\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }else{ ?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
0<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
"/>
                <input type="hidden" name="lang_translate" value="<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php if ($_smarty_tpl->tpl_vars[\'LANGUAGE_TRANSLATE\']->value!=\'\'){?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php echo $_smarty_tpl->tpl_vars[\'LANGUAGE_TRANSLATE\']->value;?>
/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }else{ ?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
<?php echo '/*%%SmartyNocache:875151466e869542f6-27370328%%*/<?php }?>/*/%%SmartyNocache:875151466e869542f6-27370328%%*/';?>
"/>
                
         </form>
         </div>  
 
<script type="text/javascript">
	$(document).ready(
		function() {
			$('#loader_overlay').hide();
			$('#loader').hide();
		}
	);
</script>
           <?php }} ?>