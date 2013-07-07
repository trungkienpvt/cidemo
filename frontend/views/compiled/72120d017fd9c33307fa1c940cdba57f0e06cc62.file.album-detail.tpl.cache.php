<?php /* Smarty version Smarty 3.1.4, created on 2013-03-12 12:47:38
         compiled from "frontend/views/templates/default\album-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12412513f865a7c50d5-97129795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72120d017fd9c33307fa1c940cdba57f0e06cc62' => 
    array (
      0 => 'frontend/views/templates/default\\album-detail.tpl',
      1 => 1336267184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12412513f865a7c50d5-97129795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cssPath' => 1,
    'jsPath' => 1,
    'ALBUM_LIST' => 1,
    'imageUpload' => 1,
    'row' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_513f865a84085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f865a84085')) {function content_513f865a84085($_smarty_tpl) {?><link href="<?php echo '/*%%SmartyNocache:12412513f865a7c50d5-97129795%%*/<?php echo $_smarty_tpl->tpl_vars[\'cssPath\']->value;?>
/*/%%SmartyNocache:12412513f865a7c50d5-97129795%%*/';?>
stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:12412513f865a7c50d5-97129795%%*/<?php echo $_smarty_tpl->tpl_vars[\'cssPath\']->value;?>
/*/%%SmartyNocache:12412513f865a7c50d5-97129795%%*/';?>
preview.csss"/>
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:12412513f865a7c50d5-97129795%%*/<?php echo $_smarty_tpl->tpl_vars[\'cssPath\']->value;?>
/*/%%SmartyNocache:12412513f865a7c50d5-97129795%%*/';?>
wt-rotator.css" />
 	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:12412513f865a7c50d5-97129795%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:12412513f865a7c50d5-97129795%%*/';?>
jquery-1.7.1.min.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:12412513f865a7c50d5-97129795%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:12412513f865a7c50d5-97129795%%*/';?>
jquery.easing.1.3.min.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:12412513f865a7c50d5-97129795%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:12412513f865a7c50d5-97129795%%*/';?>
jquery.wt-rotator.min.js" ></script>    
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:12412513f865a7c50d5-97129795%%*/<?php echo $_smarty_tpl->tpl_vars[\'jsPath\']->value;?>
/*/%%SmartyNocache:12412513f865a7c50d5-97129795%%*/';?>
preview_albums.js" ></script>
<div id="primary">
<div class="panel">
 	<div class="container">
        <div class="wt-rotator">
            <div class="screen">
                <noscript><img src="triworks_abstract17.jpg" /></noscript>
            </div>
            <div class="c-panel">
                <div class="thumbnails">
                    <ul>
                    <?php echo '/*%%SmartyNocache:12412513f865a7c50d5-97129795%%*/<?php  $_smarty_tpl->tpl_vars[\'row\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'row\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'ALBUM_LIST\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'row\']->key => $_smarty_tpl->tpl_vars[\'row\']->value){
$_smarty_tpl->tpl_vars[\'row\']->_loop = true;
?>/*/%%SmartyNocache:12412513f865a7c50d5-97129795%%*/';?>

                    <li>
                            <a href="<?php echo '/*%%SmartyNocache:12412513f865a7c50d5-97129795%%*/<?php echo $_smarty_tpl->tpl_vars[\'imageUpload\']->value;?>
/*/%%SmartyNocache:12412513f865a7c50d5-97129795%%*/';?>
orginal/<?php echo '/*%%SmartyNocache:12412513f865a7c50d5-97129795%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'images\'];?>
/*/%%SmartyNocache:12412513f865a7c50d5-97129795%%*/';?>
" /><img src="<?php echo '/*%%SmartyNocache:12412513f865a7c50d5-97129795%%*/<?php echo $_smarty_tpl->tpl_vars[\'imageUpload\']->value;?>
/*/%%SmartyNocache:12412513f865a7c50d5-97129795%%*/';?>
thumb/<?php echo '/*%%SmartyNocache:12412513f865a7c50d5-97129795%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'images\'];?>
/*/%%SmartyNocache:12412513f865a7c50d5-97129795%%*/';?>
"/></a>
                            <a  ></a>                        
                            
                        </li>
                    <?php echo '/*%%SmartyNocache:12412513f865a7c50d5-97129795%%*/<?php } ?>/*/%%SmartyNocache:12412513f865a7c50d5-97129795%%*/';?>

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