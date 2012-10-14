<?php /* Smarty version Smarty 3.1.4, created on 2012-02-20 11:13:59
         compiled from "application/views/templates/admin\add_albums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149074f428d676ad806-69988462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4357205b64bbf8fe1ddf292459476f1099e33c5' => 
    array (
      0 => 'application/views/templates/admin\\add_albums.tpl',
      1 => 1327739406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149074f428d676ad806-69988462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ALBUM_INFO_TITLE' => 1,
    'baseUrl' => 1,
    'ALBUM_TITLE' => 1,
    'ALBUM_DATA' => 1,
    'LINK' => 1,
    'SELECT_STATUS_TITLE' => 1,
    'ACTIVE_TITLE' => 1,
    'UNACTIVE_TITLE' => 1,
    'UPLOAD_TITLE' => 1,
    'SUBMIT_TITLE' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f428d677b03f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f428d677b03f')) {function content_4f428d677b03f($_smarty_tpl) {?><h2><?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'ALBUM_INFO_TITLE\']->value;?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
</h2>
     
         <div class="form">
         <form action="<?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
albums/save" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="title"><?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'ALBUM_TITLE\']->value;?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="title" id="title" size="54" value="<?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php if ($_smarty_tpl->tpl_vars[\'ALBUM_DATA\']->value!=0){?>/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
<?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'ALBUM_DATA\']->value[\'title\'];?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
<?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php }?>/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="links"><?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'LINK\']->value;?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
 :</label></dt>
                        <dd>
                        <input type="text" name="link"   id="link" size="54" value="<?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php if ($_smarty_tpl->tpl_vars[\'ALBUM_DATA\']->value!=0){?>/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
<?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'ALBUM_DATA\']->value[\'links\'];?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
<?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php }?>/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
" />
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="color"><?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'SELECT_STATUS_TITLE\']->value;?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php if ($_smarty_tpl->tpl_vars[\'ALBUM_DATA\']->value!=0){?>/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>

                        <?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php if ($_smarty_tpl->tpl_vars[\'ALBUM_DATA\']->value[\'status\']==1){?>/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>

                            <input type="radio" name="status" checked="checked" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
</label>
                            <input type="radio" name="status" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php }else{ ?>/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>

                         	<input type="radio" name="status" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
</label>
                            <input type="radio" name="status" checked="checked" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php }?>/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>

                         <?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php }else{ ?>/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>

                         <input type="radio" name="status"  id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
</label>
                            <input type="radio" name="status" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
</label>
                          <?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php }?>/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>

                        </dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="image"><?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'UPLOAD_TITLE\']->value;?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
:</label></dt>
                        <dd><input type="file" name="userfile" id="userfile" /></dd>
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="<?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBMIT_TITLE\']->value;?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="<?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php if ($_smarty_tpl->tpl_vars[\'ALBUM_DATA\']->value!=0){?>/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
<?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php echo $_smarty_tpl->tpl_vars[\'ALBUM_DATA\']->value[\'id\'];?>
/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
<?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php }else{ ?>/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
0<?php echo '/*%%SmartyNocache:149074f428d676ad806-69988462%%*/<?php }?>/*/%%SmartyNocache:149074f428d676ad806-69988462%%*/';?>
"/>
                
         </form>
         </div>  <?php }} ?>