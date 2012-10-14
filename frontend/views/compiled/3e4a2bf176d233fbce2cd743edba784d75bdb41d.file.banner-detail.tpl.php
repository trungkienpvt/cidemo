<?php /* Smarty version Smarty 3.1.4, created on 2012-10-13 19:01:47
         compiled from "frontend/views/templates/default\banner-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5723507a1d0b33f8a3-01111880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e4a2bf176d233fbce2cd743edba784d75bdb41d' => 
    array (
      0 => 'frontend/views/templates/default\\banner-detail.tpl',
      1 => 1338132514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5723507a1d0b33f8a3-01111880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cssPath' => 1,
    'jsPath' => 1,
    'BANNER_LIST' => 1,
    'imageUpload' => 1,
    'row' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_507a1d0b41943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507a1d0b41943')) {function content_507a1d0b41943($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
preview.csss"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
wt-rotator.css" />
 	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
jquery-1.7.1.min.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
jquery.easing.1.3.min.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
jquery.wt-rotator.min.js" ></script>    
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
preview_banner.js" ></script>
<div id="primary1">
<div class="panel">
 	<div class="container">
        <div class="wt-rotator">
            <div class="screen">
                <noscript><img src="triworks_abstract17.jpg" /></noscript>
            </div>
            <div class="c-panel">
                <div class="thumbnails">
                    <ul>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BANNER_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['imageUpload']->value;?>
orginal/<?php echo $_smarty_tpl->tpl_vars['row']->value['images'];?>
" /><img src="<?php echo $_smarty_tpl->tpl_vars['imageUpload']->value;?>
thumb/<?php echo $_smarty_tpl->tpl_vars['row']->value['images'];?>
"/></a>
                            <a  ></a>                        
                            
                        </li>
                    <?php } ?>
                    </ul>
              </div>  
              	<div class="buttons">
                    <div class="prev-btn"></div>
                    <div class="play-btn"></div>    
                    <div class="next-btn"></div>               
                </div>
            </div>
        </div>	
  	</div>
</div>

</div>
<?php }} ?>