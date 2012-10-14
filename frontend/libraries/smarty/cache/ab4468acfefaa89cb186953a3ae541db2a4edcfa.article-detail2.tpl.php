<?php /*%%SmartyHeaderCode:232864fadc01b3b9d03-27354189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab4468acfefaa89cb186953a3ae541db2a4edcfa' => 
    array (
      0 => 'frontend/views/templates/default\\article-detail2.tpl',
      1 => 1336783977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232864fadc01b3b9d03-27354189',
  'variables' => 
  array (
    'ARTICLE_DATA' => 1,
    'imageUpload' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4fadc01b47580',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fadc01b47580')) {function content_4fadc01b47580($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>.: Online news :.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="http://schemas.microsoft.com/intellisense/ie5" name="vs_targetSchema" /></head>
<body style="margin: 0px;">
    <div>
        <div class="toolTipTitle" style="margin-left: 10px;">
        <?php echo $_smarty_tpl->tpl_vars['ARTICLE_DATA']->value['title'];?>

        </div>
        <div style="clear: both">
            <img style='float:left;display:block;margin:10px;width:100px;height:100px;' src='<?php echo $_smarty_tpl->tpl_vars['imageUpload']->value;?>
thumb/<?php echo $_smarty_tpl->tpl_vars['ARTICLE_DATA']->value['image'];?>
' border='0' alt='' />
            <div style="margin-top: 5px; padding: 0px 5px 5px 5px;">
                <span class='LargeTime1'>Thýì Hai, 07/05/2012, 06:45 (GMT+7)</span>
                <br />
                <span class="toolTipBody" style="padding: 0px;">
                    <?php echo $_smarty_tpl->tpl_vars['ARTICLE_DATA']->value['description'];?>

                </span>
            </div>
        </div>
    </div>
</body>
</html><?php }} ?>