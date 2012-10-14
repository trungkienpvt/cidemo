<?php /* Smarty version Smarty 3.1.4, created on 2012-09-12 09:45:07
         compiled from "../backend/views/templates/admin\add_category_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156655050bc13e17978-66602587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f04404f0ffa5477920fc34d55e455a6fc4cb1080' => 
    array (
      0 => '../backend/views/templates/admin\\add_category_product.tpl',
      1 => 1341331348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156655050bc13e17978-66602587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jsPath' => 1,
    'SCRIPT_PREVIEW' => 1,
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
    'IMAGE_TITLE' => 1,
    'basePath' => 1,
    'SUBMIT_TITLE' => 1,
    'TRANSLATE_STATUS' => 1,
    'LANGUAGE_TRANSLATE' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5050bc14047f8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5050bc14047f8')) {function content_5050bc14047f8($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'E:\xampp\htdocs\ciapp\backend\libraries\smarty\libs\plugins\function.html_options.php\';
?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<script src="<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
admin/ajaxupload.js"></script>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'SCRIPT_PREVIEW\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>

<h2><?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_INFO_TITLE\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
</h2>
     
         <div class="form">
         <form action="<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
category_product/save" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="name"><?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_NAME\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="name" tabindex="1" id="name" size="54" value="<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value!=0){?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value[\'catName\'];?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="parent"><?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_PARENT\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
 :</label></dt>
                        <dd>
                        <div id="category_parent">
                        <?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo smarty_function_html_options(array(\'values\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_VALUE\']->value,\'output\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_TEXT\']->value,\'name\'=>\'parent\',\'selected\'=>$_smarty_tpl->tpl_vars[\'MY_SELECT\']->value,\'tabindex\'=>"2"),$_smarty_tpl);?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>

                        </div>
                        </dd>
                        
                    </dl>
                    
                    <dl>
                        <dt><label for="color"><?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'SELECT_STATUS_TITLE\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value!=0){?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>

                        <?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value[\'status\']==1){?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>

                            <input type="radio" name="status" tabindex="3" checked="checked" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
</label>
                            <input type="radio" name="status" tabindex="4" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }else{ ?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>

                         	<input type="radio" name="status" tabindex="3" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
</label>
                            <input type="radio" name="status" tabindex="4" checked="checked" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>

                         <?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }else{ ?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>

                         <input type="radio" name="status" tabindex="3"  id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
</label>
                            <input type="radio" name="status" tabindex="4" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
</label>
                          <?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>

                        </dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="image"><?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TAB\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
:</label></dt>
                        <dd><input type="text" name="tab" id="tab" tabindex="5" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="image"><?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'IMAGE_TITLE\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
:</label></dt>
                        <dd><input type="file" name="userfile" id="userfile" tabindex="6" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="preview"></label></dt>
                        <div id="upload-div"></div>
                        <div id="loader_overlay" class="loader_overlay_BG"></div>
						<div id="loader" class="loading">Loading</div>
                        <div id='preview'>
                        <?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value!=0){?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>

                        <img src="<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'basePath\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
data/images/thumb/<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value[\'images\'];?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
"/>
                        <?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>

                        </div>
                    </dl>
                     <dl class="submit">
                     
                    <input type="submit" name="submit" id="submit" value="<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBMIT_TITLE\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
" tabindex="7" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value!=0){?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value[\'idCategory\'];?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }else{ ?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
0<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
"/>
                <input type="hidden" name="lerver" value="<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value!=0){?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value[\'lever\'];?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }else{ ?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
0<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
"/>
                <input type="hidden" name="previewphoto" id="previewphoto" value=""/>
                <input type="hidden" name="rid" value="<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value!=0){?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value[\'rid\'];?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }else{ ?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
0<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
"/>
                <input type="hidden" name="image_link" value="<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value!=0){?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value[\'images\'];?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
"/>
                <input type="hidden" name="translate" value="<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php if ($_smarty_tpl->tpl_vars[\'TRANSLATE_STATUS\']->value!=\'\'){?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'TRANSLATE_STATUS\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }else{ ?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
0<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
"/>
                <input type="hidden" name="lang_translate" value="<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php if ($_smarty_tpl->tpl_vars[\'LANGUAGE_TRANSLATE\']->value!=\'\'){?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php echo $_smarty_tpl->tpl_vars[\'LANGUAGE_TRANSLATE\']->value;?>
/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }else{ ?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
<?php echo '/*%%SmartyNocache:156655050bc13e17978-66602587%%*/<?php }?>/*/%%SmartyNocache:156655050bc13e17978-66602587%%*/';?>
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