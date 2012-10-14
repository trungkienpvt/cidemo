<?php /*%%SmartyHeaderCode:85224f45234845e1c7-60716880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a4b944b816fe99728e902be39e4f6aac9559a75' => 
    array (
      0 => 'frontend/views/templates/admin\\index.tpl',
      1 => 1327739484,
      2 => 'file',
    ),
    'fcae61c417ff051f6136c29812aa85b48fce152c' => 
    array (
      0 => 'frontend/views/templates/admin\\header.tpl',
      1 => 1327739142,
      2 => 'file',
    ),
    '7796dc711c4a50de5699701cf9a9154b1a0f75bb' => 
    array (
      0 => 'frontend/views/templates/admin\\index_album.tpl',
      1 => 1327739650,
      2 => 'file',
    ),
    '2302ec3133b5a2c586fe83c2d39d1eb91aee54cb' => 
    array (
      0 => 'frontend/views/templates/admin\\footer.tpl',
      1 => 1321298284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85224f45234845e1c7-60716880',
  'variables' => 
  array (
    'jsPath' => 1,
    'imagePath' => 1,
    'baseUrl' => 1,
    'MENU_TOP' => 1,
    'MENU_LEFT' => 1,
    'MESSAGE_ARRAY' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f4523486cefc',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f4523486cefc')) {function content_4f4523486cefc($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
admin_style.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
admin_niceforms-default.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/ddaccordion.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/clockp.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/jconfirmaction.jquery.js"></script>
</head>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/niceforms.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/jconfirmaction.jquery.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
admin/test.js"></script>

<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

</head>
<body>
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;?>
images_admin/logo.gif" alt="" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome Admin, <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
index.php">Visit site</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
users/logout" class="logout">Logout</a></div>
    <div id="clock_a"></div>
    </div>
    
    <div class="main_content">
    
                    <div class="menu">
                    <?php echo $_smarty_tpl->tpl_vars['MENU_TOP']->value;?>

                    </ul>
                    </div> 
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    <div class="left_content">
    
    		<?php echo $_smarty_tpl->tpl_vars['MENU_LEFT']->value;?>

    
    <div class="right_content">
    <?php if ($_smarty_tpl->tpl_vars['MESSAGE_ARRAY']->value['error_message']!=''){?>            
    <div class="<?php echo $_smarty_tpl->tpl_vars['MESSAGE_ARRAY']->value['message_type'];?>
"><?php echo $_smarty_tpl->tpl_vars['MESSAGE_ARRAY']->value['error_message'];?>
</div>    
    <?php }?>
    <h2><?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
</h2>
                    
<form name="albumForm" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
albums/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded"><?php echo $_smarty_tpl->tpl_vars['ALBUM_TITLE']->value;?>
</th>
            <th scope="col" class="rounded"><?php echo $_smarty_tpl->tpl_vars['ALBUM_LINK']->value;?>
</th>
            <th scope="col" class="rounded"><?php echo $_smarty_tpl->tpl_vars['STATUS_TITLE']->value;?>
</th>
            <th scope="col" class="rounded"><?php echo $_smarty_tpl->tpl_vars['IMAGE_TITLE']->value;?>
</th>
            <th scope="col" class="rounded"><?php echo $_smarty_tpl->tpl_vars['EDIT_TITLE']->value;?>
</th>
            <th scope="col" class="rounded-q4"><?php echo $_smarty_tpl->tpl_vars['DELETE_TITLE']->value;?>
</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="6" class="rounded-foot-left"><em></em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ALBUM_LIST']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
    <?php $_smarty_tpl->tpl_vars['START_LOOP'] = new Smarty_variable($_smarty_tpl->tpl_vars['START_LOOP']->value+1, true, 0);?>
    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_<?php echo $_smarty_tpl->tpl_vars['START_LOOP']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ALBUM_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" onclick='isChecked(this);' /></td>
            <td><?php echo $_smarty_tpl->tpl_vars['ALBUM_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['ALBUM_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['links'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['ALBUM_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status'];?>
</td>
            <td>
            <?php if ($_smarty_tpl->tpl_vars['ALBUM_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['images']=='NULL'){?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;?>
user-noimage.jpg"/>
            <?php }else{ ?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['imageUpload']->value;?>
thumb/<?php echo $_smarty_tpl->tpl_vars['ALBUM_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['images'];?>
"/>
            <?php }?>
            </td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
albums/add/id/<?php echo $_smarty_tpl->tpl_vars['ALBUM_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;?>
images_admin/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
albums/delete/id/<?php echo $_smarty_tpl->tpl_vars['ALBUM_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" class="ask"><img src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;?>
images_admin/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        <?php endfor; endif; ?>
    </tbody>
</table>
	 <a href="<?php echo $_smarty_tpl->tpl_vars['URL_ADD_ITEM']->value;?>
" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="javascript:
if (document.forms['albumForm'].boxchecked.value==0)
{
alert('<?php echo $_smarty_tpl->tpl_vars['PLEASE_SELECT']->value;?>
');
return false;
}
else
{
document.forms['albumForm'].submit();
}"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="<?php echo $_smarty_tpl->tpl_vars['NUM_ROW']->value;?>
"/>
     <input type="hidden" value="0" name="boxchecked"> 
 </form>    
     
        <div class="pagination">
        <?php echo $_smarty_tpl->tpl_vars['PAGINATION_STRING']->value;?>

        
        </div> 
     
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	<div class="footer">
    
    	<div class="left_footer">IN ADMIN PANEL | Powered by <a href="http://indeziner.com">INDEZINER</a></div>
<div class="right_footer"><a href="http://indeziner.com"><img src="<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;?>
images_admin/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

</div>		</body>
</html><?php }} ?>