<?php /* Smarty version Smarty 3.1.4, created on 2012-08-11 09:39:29
         compiled from "../backend/views/templates/admin\add_article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1399450268ac18f58e5-06705654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdf6a08497ad6ffafb680f2d577d4892b38213a4' => 
    array (
      0 => '../backend/views/templates/admin\\add_article.tpl',
      1 => 1341329412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1399450268ac18f58e5-06705654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basePath' => 1,
    'jsPath' => 1,
    'cssPath' => 1,
    'SCRIPT_PREVIEW' => 1,
    'ARTICLE_INFO_TITLE' => 1,
    'baseUrl' => 1,
    'ARTICLE_TITLE' => 1,
    'ARTICLE_DATA' => 1,
    'DESCRIPTION_TITLE' => 1,
    'CATEGORY_TITLE' => 1,
    'LIST_CATGORY_VALUE' => 0,
    'LIST_CATGORY_TEXT' => 0,
    'MY_SELECT' => 1,
    'CONTENT_TITLE' => 1,
    'CONTENT_DATA' => 1,
    'SELECT_STATUS_TITLE' => 1,
    'ACTIVE_TITLE' => 1,
    'UNACTIVE_TITLE' => 1,
    'IMAGE_TITLE' => 1,
    'SUBMIT_TITLE' => 1,
    'TRANSLATE_STATUS' => 1,
    'LANGUAGE_TRANSLATE' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_50268ac1aac49',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50268ac1aac49')) {function content_50268ac1aac49($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'E:\xampp\htdocs\ciapp\backend\libraries\smarty\libs\plugins\function.html_options.php\';
?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<script src="<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'basePath\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'basePath\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
assets/ckfinder/ckfinder.js"></script>
<script src="<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
admin/ajaxupload.js"></script>
<link href="<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'cssPath\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
selectbox.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
	$(document).ready(function(){	

		if (!$.browser.opera) {
    
			// select element styling
			$('select.select').each(function(){
				var title = $(this).attr('title');
				if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
				$(this)
					.css({'z-index':10,'opacity':0,'-khtml-appearance':'none'})
					.after('<span class="select">' + title + '</span>')
					.change(function(){
						val = $('option:selected',this).text();
						$(this).next().text(val);
						})
			});

		};
		
	});
</script>

<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'SCRIPT_PREVIEW\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>

<h2><?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_INFO_TITLE\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
</h2>
     
         <div class="form">
         <form action="<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
articles/save" method="post" class="niceform1" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="title"><?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_TITLE\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="title" tabindex="1" id="title" size="54" value="<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value!=0){?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value[\'title\'];?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="description"><?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'DESCRIPTION_TITLE\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
 :</label></dt>
                        <dd>
                        <textarea type="text" name="description" tabindex="2"   id="description" size="54" ><?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value!=0){?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value[\'description\'];?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
</textarea>
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="parent"><?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TITLE\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
 :</label></dt>
                        <dd>
                        <div id="category">
                        <?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo smarty_function_html_options(array(\'values\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_VALUE\']->value,\'output\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_TEXT\']->value,\'name\'=>\'category\',\'selected\'=>$_smarty_tpl->tpl_vars[\'MY_SELECT\']->value,\'class\'=>\'select\',\'tabindex\'=>"3"),$_smarty_tpl);?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>

                        </div>
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="content"><?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'CONTENT_TITLE\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
 :</label></dt>
                    </dl>
                    <dl>
                        <dd style="width:100%">
                       <?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'CONTENT_DATA\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
 
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="color"><?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'SELECT_STATUS_TITLE\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value!=0){?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>

                        <?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value[\'status\']==1){?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>

                            <input type="radio" name="status" checked="checked" id="active" tabindex="5" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
</label>
                            <input type="radio" name="status" id="unactive" tabindex="6" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }else{ ?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>

                         	<input type="radio" name="status" id="active" tabindex="5" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
</label>
                            <input type="radio" name="status" checked="checked" tabinded="6" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>

                         <?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }else{ ?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>

                         <input type="radio" name="status"  id="active" tabindex="5" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
</label>
                            <input type="radio" name="status" id="unactive" tabindex="6" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
</label>
                          <?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>

                        </dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="image"><?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'IMAGE_TITLE\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
:</label></dt>
                        <dd><input type="file" name="userfile" id="userfile" tabindex="7" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="preview"></label></dt>
                        <div id="upload-div"></div>
                        <div id="loader_overlay" class="loader_overlay_BG"></div>
						<div id="loader" class="loading">Loading</div>
                        <div id='preview'>
                        <?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value!=0){?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>

                        <img src="<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'basePath\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
data/images/thumb/<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value[\'image\'];?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
"/>
                        <?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>

                        </div>
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBMIT_TITLE\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
" tabindex="8" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value!=0){?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value[\'idArticle\'];?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }else{ ?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
0<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
"/>
                <input type="hidden" name="previewphoto" id="previewphoto" value=""/>
                <input type="hidden" name="rid" value="<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value!=0){?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value[\'rid\'];?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }else{ ?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
0<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
"/>
                <input type="hidden" name="image_link" value="<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value!=0){?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value[\'image\'];?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
"/>
                <input type="hidden" name="translate" value="<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php if ($_smarty_tpl->tpl_vars[\'TRANSLATE_STATUS\']->value!=\'\'){?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'TRANSLATE_STATUS\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }else{ ?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
0<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
"/>
                <input type="hidden" name="lang_translate" value="<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php if ($_smarty_tpl->tpl_vars[\'LANGUAGE_TRANSLATE\']->value!=\'\'){?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php echo $_smarty_tpl->tpl_vars[\'LANGUAGE_TRANSLATE\']->value;?>
/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }else{ ?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
<?php echo '/*%%SmartyNocache:1399450268ac18f58e5-06705654%%*/<?php }?>/*/%%SmartyNocache:1399450268ac18f58e5-06705654%%*/';?>
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