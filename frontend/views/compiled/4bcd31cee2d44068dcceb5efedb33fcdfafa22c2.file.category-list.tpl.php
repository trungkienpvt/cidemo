<?php /* Smarty version Smarty 3.1.4, created on 2012-07-15 07:47:49
         compiled from "frontend/views/templates/default\category-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289805002d815931e54-45833806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bcd31cee2d44068dcceb5efedb33fcdfafa22c2' => 
    array (
      0 => 'frontend/views/templates/default\\category-list.tpl',
      1 => 1338404168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289805002d815931e54-45833806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BREAD_CRUMB' => 1,
    'CATEGORY_LIST' => 1,
    'START_LOOP' => 1,
    'baseUrl' => 1,
    'imageUpload' => 1,
    'PAGINATION_STRING' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5002d8159e75c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5002d8159e75c')) {function content_5002d8159e75c($_smarty_tpl) {?>  <div id="primary1">
<div id="itemCount">
                    <?php echo $_smarty_tpl->tpl_vars['BREAD_CRUMB']->value;?>

                </div>
                <div id="sortable">
                </div>
 <div class="productWrap itemInfo">           
 <ul class="items">
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CATEGORY_LIST']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					
					<?php if (($_smarty_tpl->tpl_vars['START_LOOP']->value%4)==0){?>	
						<li class="last">
						<?php }else{ ?>
						<li class="" >
						<?php }?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
category/<?php echo $_smarty_tpl->tpl_vars['CATEGORY_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['rid'];?>
/<?php echo $_smarty_tpl->tpl_vars['CATEGORY_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['catName'];?>
"><span><img src="<?php echo $_smarty_tpl->tpl_vars['imageUpload']->value;?>
thumbx/<?php echo $_smarty_tpl->tpl_vars['CATEGORY_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['images'];?>
" alt="shirt"  /></span></a>
							<?php echo $_smarty_tpl->tpl_vars['CATEGORY_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['catName'];?>
<br/><p>
							
							<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
category/<?php echo $_smarty_tpl->tpl_vars['CATEGORY_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['rid'];?>
/<?php echo $_smarty_tpl->tpl_vars['CATEGORY_LIST']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['catName'];?>
" class="FancyFormRadio FancyFormRadio-current" style="width:60px">More</a>
							</p>
						</li>
					
				<?php endfor; endif; ?>
				</ul>
				</div>
            
            <div id="primaryFooter">
                <a href="#" class="icon upArrow">Back to top</a>
                <div id="pagination">
        <?php echo $_smarty_tpl->tpl_vars['PAGINATION_STRING']->value;?>

</div></div>
            </div>

     <?php }} ?>