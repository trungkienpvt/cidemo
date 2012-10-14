<?php /* Smarty version Smarty 3.1.4, created on 2012-02-22 07:48:26
         compiled from "application/views/templates/admin\add_article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307734f45003a6b5244-59195375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68f5aaea4385949299d0d6633368fd8f67dbf437' => 
    array (
      0 => 'application/views/templates/admin\\add_article.tpl',
      1 => 1327739858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307734f45003a6b5244-59195375',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseUrl' => 1,
    'ARTICLE_INFO_TITLE' => 1,
    'ARTICLE_TITLE' => 1,
    'ARTICLE_DATA' => 1,
    'DESCRIPTION_TITLE' => 1,
    'CONTENT_TITLE' => 1,
    'CONTENT_DATA' => 1,
    'SELECT_STATUS_TITLE' => 1,
    'ACTIVE_TITLE' => 1,
    'UNACTIVE_TITLE' => 1,
    'IMAGE_TITLE' => 1,
    'SUBMIT_TITLE' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f45003a7c8c1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f45003a7c8c1')) {function content_4f45003a7c8c1($_smarty_tpl) {?><script src="<?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
assets/ckfinder/ckfinder.js"></script>
<h2><?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_INFO_TITLE\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
</h2>
     
         <div class="form">
         <form action="<?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
admin_articles/save" method="post" class="niceform1" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="title"><?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_TITLE\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="title" id="title" size="54" value="<?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value!=0){?>/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
<?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value[\'title\'];?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
<?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php }?>/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="description"><?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'DESCRIPTION_TITLE\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
 :</label></dt>
                        <dd>
                        <textarea type="text" name="description"   id="description" size="54" ><?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value!=0){?>/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
<?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value[\'description\'];?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
<?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php }?>/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
</textarea>
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="content"><?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'CONTENT_TITLE\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
 :</label></dt>
                    </dl>
                    <dl>
                        <dd style="width:100%">
                       <?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'CONTENT_DATA\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
 
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="color"><?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'SELECT_STATUS_TITLE\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value!=0){?>/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>

                        <?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value[\'status\']==1){?>/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>

                            <input type="radio" name="status" checked="checked" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
</label>
                            <input type="radio" name="status" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php }else{ ?>/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>

                         	<input type="radio" name="status" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
</label>
                            <input type="radio" name="status" checked="checked" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php }?>/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>

                         <?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php }else{ ?>/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>

                         <input type="radio" name="status"  id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
</label>
                            <input type="radio" name="status" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
</label>
                          <?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php }?>/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>

                        </dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="image"><?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'IMAGE_TITLE\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
:</label></dt>
                        <dd><input type="file" name="userfile" id="userfile" /></dd>
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="<?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBMIT_TITLE\']->value;?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="<?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php if ($_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value!=0){?>/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
<?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php echo $_smarty_tpl->tpl_vars[\'ARTICLE_DATA\']->value[\'idArticle\'];?>
/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
<?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php }else{ ?>/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
0<?php echo '/*%%SmartyNocache:307734f45003a6b5244-59195375%%*/<?php }?>/*/%%SmartyNocache:307734f45003a6b5244-59195375%%*/';?>
"/>
                
         </form>
         </div>  <?php }} ?>