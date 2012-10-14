<?php /* Smarty version Smarty 3.1.4, created on 2012-08-30 07:40:59
         compiled from "../backend/views/templates/admin\add_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25692503f7b7b589cd3-52798708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e4e67caaa6fd60a7e90ede474b796f134d1a199' => 
    array (
      0 => '../backend/views/templates/admin\\add_product.tpl',
      1 => 1341331955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25692503f7b7b589cd3-52798708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basePath' => 1,
    'jsPath' => 1,
    'SCRIPT_PREVIEW' => 1,
    'PRODUCT_INFO_TITLE' => 1,
    'baseUrl' => 1,
    'NAME_TITLE' => 1,
    'PRODUCT_DATA' => 1,
    'DESCRIPTION_TITLE' => 1,
    'DESCRIPTION_DATA' => 1,
    'CONTENT_TITLE' => 1,
    'CONTENT_DATA' => 1,
    'PRICE_TITLE' => 1,
    'ORDERING_TITLE' => 1,
    'CATEGORY_TITLE' => 1,
    'LIST_CATGORY_VALUE' => 0,
    'LIST_CATGORY_TEXT' => 0,
    'MY_SELECT' => 1,
    'IMAGE_TITLE' => 1,
    'SUBMIT_TITLE' => 1,
    'TRANSLATE_STATUS' => 1,
    'LANGUAGE_TRANSLATE' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_503f7b7b6fee5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f7b7b6fee5')) {function content_503f7b7b6fee5($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'E:\xampp\htdocs\ciapp\backend\libraries\smarty\libs\plugins\function.html_options.php\';
?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<script src="<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'basePath\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'basePath\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
assets/ckfinder/ckfinder.js"></script>
<script src="<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
admin/ajaxupload.js"></script>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'SCRIPT_PREVIEW\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>

<h2><?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_INFO_TITLE\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
</h2>
     
         <div class="form">
         <form action="<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
product/save" method="post" class="niceform1" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="title"><?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'NAME_TITLE\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="name" tabindex="1" id="name" size="54" value="<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php if ($_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value!=0){?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value[\'name\'];?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php }?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="description"><?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'DESCRIPTION_TITLE\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
 :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'DESCRIPTION_DATA\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>

                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="description"><?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'CONTENT_TITLE\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
 :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'CONTENT_DATA\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>

                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="price"><?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRICE_TITLE\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
 :</label></dt>
                        <dd>
                        <input type="text" name="price" tabindex="4"   id="price" value="<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php if ($_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value!=0){?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value[\'price\'];?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php }?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
"/>
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="ordering"><?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'ORDERING_TITLE\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
 :</label></dt>
                        <dd>
                        <input type="text" name="ordering" tabindex="5" id="ordering" value="<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php if ($_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value!=0){?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value[\'ordering\'];?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php }?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
" />
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="category"><?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TITLE\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
 :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo smarty_function_html_options(array(\'values\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_VALUE\']->value,\'output\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_TEXT\']->value,\'name\'=>\'category\',\'selected\'=>$_smarty_tpl->tpl_vars[\'MY_SELECT\']->value,\'tabindex\'=>"6"),$_smarty_tpl);?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>

                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="image"><?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'IMAGE_TITLE\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
:</label></dt>
                        <dd><input type="file" name="userfile" id="userfile" tabindex="7" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="preview"></label></dt>
                        <div id="upload-div"></div>
                        <div id="loader_overlay" class="loader_overlay_BG"></div>
						<div id="loader" class="loading">Loading</div>
                        <div id='preview'>
                        <?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php if ($_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value!=0){?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>

                        <img src="<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'basePath\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
data/images/thumb/<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value[\'images\'];?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
"/>
                        <?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php }?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>

                        </div>
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBMIT_TITLE\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
" tabindex="8" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php if ($_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value!=0){?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value[\'id\'];?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php }else{ ?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
0<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php }?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
"/>
                <input type="hidden" name="previewphoto" id="previewphoto" value=""/>
                <input type="hidden" name="rid" value="<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php if ($_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value!=0){?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value[\'rid\'];?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php }else{ ?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
0<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php }?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
"/>
                <input type="hidden" name="image_link" value="<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php if ($_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value!=0){?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value[\'images\'];?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php }?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
"/>
                <input type="hidden" name="translate" value="<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php if ($_smarty_tpl->tpl_vars[\'TRANSLATE_STATUS\']->value!=\'\'){?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'TRANSLATE_STATUS\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php }else{ ?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
0<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php }?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
"/>
                <input type="hidden" name="lang_translate" value="<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php if ($_smarty_tpl->tpl_vars[\'LANGUAGE_TRANSLATE\']->value!=\'\'){?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php echo $_smarty_tpl->tpl_vars[\'LANGUAGE_TRANSLATE\']->value;?>
/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php }else{ ?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
<?php echo '/*%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/<?php }?>/*/%%SmartyNocache:25692503f7b7b589cd3-52798708%%*/';?>
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