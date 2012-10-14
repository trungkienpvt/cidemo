<?php /* Smarty version Smarty 3.1.4, created on 2012-04-14 09:01:47
         compiled from "../backend/views/templates/admin\add_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150684f899f6b852f35-64532209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72ea5ec2ad5f25913d638f27082b2f8f91c1be3d' => 
    array (
      0 => '../backend/views/templates/admin\\add_category.tpl',
      1 => 1334414896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150684f899f6b852f35-64532209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'JS_SCRIPT' => 1,
    'CATEGORY_INFO_TITLE' => 1,
    'baseAdmin' => 1,
    'CATEGORY_NAME' => 1,
    'CATEGORY_DATA' => 1,
    'CATEGORY_TYPE' => 1,
    'LIST_CATEGORY_TYPE_VALUE' => 0,
    'LIST_CATEGORY_TYPE_TEXT' => 0,
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
  'unifunc' => 'content_4f899f6b94edb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f899f6b94edb')) {function content_4f899f6b94edb($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\xampp\htdocs\ciapp\backend\libraries\smarty\libs\plugins\function.html_options.php';
?><?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'E:\xampp\htdocs\ciapp\backend\libraries\smarty\libs\plugins\function.html_options.php\';
?>/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
<?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'JS_SCRIPT\']->value;?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>

<h2><?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_INFO_TITLE\']->value;?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
</h2>
     
         <div class="form">
         <form action="<?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseAdmin\']->value;?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
category/save" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="name"><?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_NAME\']->value;?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="name" id="name" size="54" value="<?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value!=0){?>/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
<?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value[\'catName\'];?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
<?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php }?>/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="type"><?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TYPE\']->value;?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
 :</label></dt>
                        <dd>
                        
                        <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['LIST_CATEGORY_TYPE_VALUE']->value,'output'=>$_smarty_tpl->tpl_vars['LIST_CATEGORY_TYPE_TEXT']->value,'name'=>'category_type','id'=>'category_type'),$_smarty_tpl);?>

                        
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="parent"><?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_PARENT\']->value;?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
 :</label></dt>
                        <dd>
                        <div id="category_parent">
                        <?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo smarty_function_html_options(array(\'values\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_VALUE\']->value,\'output\'=>$_smarty_tpl->tpl_vars[\'LIST_CATGORY_TEXT\']->value,\'name\'=>\'parent\',\'selected\'=>$_smarty_tpl->tpl_vars[\'MY_SELECT\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>

                        </div>
                        </dd>
                        
                    </dl>
                    
                    <dl>
                        <dt><label for="color"><?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'SELECT_STATUS_TITLE\']->value;?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
 <span class="require">*</span> :</label></dt>
                        <dd>
                        <?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value!=0){?>/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>

                        <?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value[\'status\']==1){?>/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>

                            <input type="radio" name="status" checked="checked" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
</label>
                            <input type="radio" name="status" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php }else{ ?>/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>

                         	<input type="radio" name="status" id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
</label>
                            <input type="radio" name="status" checked="checked" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
</label>
                         <?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php }?>/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>

                         <?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php }else{ ?>/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>

                         <input type="radio" name="status"  id="active" value="1" /><label class="check_label"><?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
</label>
                            <input type="radio" name="status" id="unactive" value="0" /><label class="check_label"><?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'UNACTIVE_TITLE\']->value;?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
</label>
                          <?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php }?>/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>

                        </dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="image"><?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_TAB\']->value;?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
:</label></dt>
                        <dd><input type="text" name="tab" id="tab" /></dd>
                    </dl>
                     <dl class="submit">
                     
                    <input type="submit" name="submit" id="submit" value="<?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'SUBMIT_TITLE\']->value;?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="<?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value!=0){?>/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
<?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value[\'idCategory\'];?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
<?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php }else{ ?>/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
0<?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php }?>/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
"/>
                <input type="hidden" name="lerver" value="<?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php if ($_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value!=0){?>/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
<?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php echo $_smarty_tpl->tpl_vars[\'CATEGORY_DATA\']->value[\'lever\'];?>
/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
<?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php }else{ ?>/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
0<?php echo '/*%%SmartyNocache:150684f899f6b852f35-64532209%%*/<?php }?>/*/%%SmartyNocache:150684f899f6b852f35-64532209%%*/';?>
"/>
                
         </form>
         </div>  <?php }} ?>