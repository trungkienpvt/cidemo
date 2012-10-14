<?php /* Smarty version Smarty 3.1.4, created on 2012-08-30 07:46:20
         compiled from "../backend/views/templates/admin\add_banners.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28976503f7cbca08106-16461986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6c1086dc61d2a0484d7410c464a76fe61681756' => 
    array (
      0 => '../backend/views/templates/admin\\add_banners.tpl',
      1 => 1341330969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28976503f7cbca08106-16461986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jsPath' => 1,
    'SCRIPT_PREVIEW' => 1,
    'BANNER_INFO_TITLE' => 1,
    'baseUrl' => 1,
    'BANNER_TITLE' => 1,
    'BANNER_DATA' => 1,
    'LINK' => 1,
    'CATEGORY_TITLE' => 1,
    'LIST_CATGORY_VALUE' => 0,
    'LIST_CATGORY_TEXT' => 0,
    'MY_SELECT' => 1,
    'SELECT_STATUS_TITLE' => 1,
    'ACTIVE_TITLE' => 1,
    'UNACTIVE_TITLE' => 1,
    'UPLOAD_TITLE' => 1,
    'basePath' => 1,
    'SUBMIT_TITLE' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_503f7cbcb648e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f7cbcb648e')) {function content_503f7cbcb648e($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'E:\xampp\htdocs\ciapp\backend\libraries\smarty\libs\plugins\function.html_options.php\';
?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
<style type="text/css">


</style>
<script src="<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
admin/ajaxupload.js"></script>
<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'SCRIPT_PREVIEW\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>

<h2><?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_INFO_TITLE\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
</h2>
     
         <div class="form">
         <form action="<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
banners/save" method="post" name ="formsubmit" id ="formsubmit" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="title"><?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_TITLE\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="title" tabindex="1" id="title" size="54" value="<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php if ($_smarty_tpl->tpl_vars[\'BANNER_DATA\']->value!=0){?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_DATA\']->value[\'title\'];?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php }?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="links"><?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'LINK\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
 :</label></dt>
                        <dd>
                        <input type="text" name="link" tabindex="2"   id="link" size="54" value="<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php if ($_smarty_tpl->tpl_vars[\'BANNER_DATA\']->value!=0){?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_DATA\']->value[\'links\'];?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php }?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
" />
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="parent"><?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TITLE\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
 :</label></dt>
                        <dd>
                        <div id="category">
                        <?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo smarty_function_html_options(array(\'values\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_VALUE\']->value,\'output\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_TEXT\']->value,\'name\'=>\'category\',\'selected\'=>$_smarty_tpl->tpl_vars[\'MY_SELECT\']->value,\'tabindex\'=>"3"),$_smarty_tpl);?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>

                        </div>
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="color"><?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'SELECT_STATUS_TITLE\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php if ($_smarty_tpl->tpl_vars[\'BANNER_DATA\']->value!=0){?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>

                        <?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php if ($_smarty_tpl->tpl_vars[\'BANNER_DATA\']->value[\'status\']==1){?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>

                            <input type="radio" name="status" tabindex="4" checked="checked" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
</label>
                            <input type="radio" name="status" tabindex="5" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php }else{ ?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>

                         	<input type="radio" name="status" tabindex="4" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
</label>
                            <input type="radio" name="status" tabindex="5" checked="checked" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php }?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>

                         <?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php }else{ ?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>

                         <input type="radio" name="status" tabindex="4" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
</label>
                            <input type="radio" name="status" tabindex="5" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
</label>
                          <?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php }?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>

                        </dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="image"><?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'UPLOAD_TITLE\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
:</label></dt>
                        <dd><input type="file" name="userfile" id="userfile" tabindex="6" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="preview"></label></dt>
                        <div id="upload-div"></div>
                        <div id="loader_overlay" class="loader_overlay_BG"></div>
						<div id="loader" class="loading">Loading</div>
                        <div id='preview'>
                        <?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php if ($_smarty_tpl->tpl_vars[\'BANNER_DATA\']->value!=0){?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>

                        <img src="<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'basePath\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
data/images/thumb/<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_DATA\']->value[\'images\'];?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
"/>
                        <?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php }?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>

                        
                        
                        </div>
                    </dl>
                    
                     <dl class="submit">
                    <input type="submit" name="btnsubmit" id="btnsubmit" value="<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBMIT_TITLE\']->value;?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php if ($_smarty_tpl->tpl_vars[\'BANNER_DATA\']->value!=0){?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php echo $_smarty_tpl->tpl_vars[\'BANNER_DATA\']->value[\'id\'];?>
/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php }else{ ?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
0<?php echo '/*%%SmartyNocache:28976503f7cbca08106-16461986%%*/<?php }?>/*/%%SmartyNocache:28976503f7cbca08106-16461986%%*/';?>
"/>
                <input type="hidden" name="previewphoto" id="previewphoto" value=""/>
                
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