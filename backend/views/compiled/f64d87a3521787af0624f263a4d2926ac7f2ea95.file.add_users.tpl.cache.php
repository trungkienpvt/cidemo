<?php /* Smarty version Smarty 3.1.4, created on 2012-08-30 07:43:31
         compiled from "../backend/views/templates/admin\add_users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26062503f7c13582d46-63895367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f64d87a3521787af0624f263a4d2926ac7f2ea95' => 
    array (
      0 => '../backend/views/templates/admin\\add_users.tpl',
      1 => 1341329241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26062503f7c13582d46-63895367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jsPath' => 1,
    'SCRIPT_PREVIEW' => 1,
    'USER_INFO_TITLE' => 1,
    'baseUrl' => 1,
    'FULLNAME_TITLE' => 1,
    'USER_DATA' => 1,
    'USERNAME_TITLE' => 1,
    'EMAIL_TITLE' => 1,
    'PASSWORD_TITLE' => 1,
    'SELECT_STATUS_TITLE' => 1,
    'ACTIVE_TITLE' => 1,
    'UNACTIVE_TITLE' => 1,
    'ROLE_TITLE' => 1,
    'LIST_ROLE_VALUE' => 1,
    'LIST_ROLE_TEXT' => 1,
    'MY_SELECT' => 1,
    'UPLOAD_TITLE' => 1,
    'basePath' => 1,
    'SUBMIT_TITLE' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_503f7c136bff8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f7c136bff8')) {function content_503f7c136bff8($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'E:\xampp\htdocs\ciapp\backend\libraries\smarty\libs\plugins\function.html_options.php\';
?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
<script src="<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
admin/ajaxupload.js"></script>
<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'SCRIPT_PREVIEW\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>

<h2><?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_INFO_TITLE\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
</h2>
     
         <div class="form">
         <form action="<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
users/save" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="fullname"><?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'FULLNAME_TITLE\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="fullname" id="fullname" size="54" tabindex="1" value="<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php if ($_smarty_tpl->tpl_vars[\'USER_DATA\']->value!=0){?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_DATA\']->value[\'fullname\'];?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php }?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="ussername"><?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'USERNAME_TITLE\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd>
                        <input type="text" name="username" id="username" size="54" tabindex="2" value="<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php if ($_smarty_tpl->tpl_vars[\'USER_DATA\']->value!=0){?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_DATA\']->value[\'username\'];?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php }?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
" />
                        
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="email"><?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'EMAIL_TITLE\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="email" id="email" tabindex="3" size="54" value="<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php if ($_smarty_tpl->tpl_vars[\'USER_DATA\']->value!=0){?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_DATA\']->value[\'email\'];?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php }?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password"><?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'PASSWORD_TITLE\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="password" name="password" id="password" tabindex="4" size="54" value="password" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="color"><?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'SELECT_STATUS_TITLE\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php if ($_smarty_tpl->tpl_vars[\'USER_DATA\']->value!=0){?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>

                        <?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php if ($_smarty_tpl->tpl_vars[\'USER_DATA\']->value[\'status\']==1){?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>

                            <input type="radio" name="status" tabindex="5" checked="checked" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
</label>
                            <input type="radio" name="status" tabindex="6" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php }else{ ?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>

                         	<input type="radio" name="status" tabindex="5" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
</label>
                            <input type="radio" name="status" tabindex="6" checked="checked" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php }?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>

                         <?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php }else{ ?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>

                         <input type="radio" name="status" tabindex="5"  id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
</label>
                            <input type="radio" name="status" id="unactive" tabindex="6" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
</label>
                          <?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php }?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>

                        </dd>
                        </dd>
                    </dl>
                    <dl>
                    <dt><label for="parent"><?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'ROLE_TITLE\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
 :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo smarty_function_html_options(array(\'values\'=>$_smarty_tpl->tpl_vars[\'LIST_ROLE_VALUE\']->value,\'output\'=>$_smarty_tpl->tpl_vars[\'LIST_ROLE_TEXT\']->value,\'name\'=>\'role\',\'selected\'=>$_smarty_tpl->tpl_vars[\'MY_SELECT\']->value,\'tabindex\'=>"7"),$_smarty_tpl);?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>

                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="image"><?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'UPLOAD_TITLE\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
:</label></dt>
                        <dd><input type="file" name="userfile" tabindex="8" id="userfile" /></dd>
                    </dl>
                    <dl>
                    <dt><label for="preview"></label></dt>
                    <div id="upload-div"></div>
                    <div id="loader_overlay" class="loader_overlay_BG"></div>
					<div id="loader" class="loading">Loading</div>
                    <div id='preview'>
                        <?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php if ($_smarty_tpl->tpl_vars[\'USER_DATA\']->value!=0){?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>

                        <img src="<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'basePath\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
data/images/thumb/<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_DATA\']->value[\'images\'];?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
"/>
                        <?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php }?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>

                        </div>
                </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" tabindex="9" value="<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBMIT_TITLE\']->value;?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php if ($_smarty_tpl->tpl_vars[\'USER_DATA\']->value!=0){?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php echo $_smarty_tpl->tpl_vars[\'USER_DATA\']->value[\'idUser\'];?>
/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php }else{ ?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
0<?php echo '/*%%SmartyNocache:26062503f7c13582d46-63895367%%*/<?php }?>/*/%%SmartyNocache:26062503f7c13582d46-63895367%%*/';?>
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