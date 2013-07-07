<?php /* Smarty version Smarty 3.1.4, created on 2013-03-12 11:21:33
         compiled from "frontend/views/templates/default\product-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25970513f722d28b171-36590007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cad0c7efb1d119a7e50c04a47e05b65be5d04c28' => 
    array (
      0 => 'frontend/views/templates/default\\product-detail.tpl',
      1 => 1362524066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25970513f722d28b171-36590007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BREAD_CRUMB' => 1,
    'PRODUCT_DATA' => 1,
    'imageUpload' => 1,
    'PRODUCT_PRICE' => 1,
    'PRODUCT_CURRENCY' => 1,
    'baseUrl' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_513f722d32b1a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f722d32b1a')) {function content_513f722d32b1a($_smarty_tpl) {?><div class="span12">
<div class="lead-sub">
    <?php echo '/*%%SmartyNocache:25970513f722d28b171-36590007%%*/<?php echo $_smarty_tpl->tpl_vars[\'BREAD_CRUMB\']->value;?>
/*/%%SmartyNocache:25970513f722d28b171-36590007%%*/';?>

</div>
<div class="clear"></div>
<div class="product-details">
    <div class="pdhme">
        <div class="p-item">
            <div align="center" class="phimg zoomp">
                <a title="<?php echo '/*%%SmartyNocache:25970513f722d28b171-36590007%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value[\'name\'];?>
/*/%%SmartyNocache:25970513f722d28b171-36590007%%*/';?>
" href="<?php echo '/*%%SmartyNocache:25970513f722d28b171-36590007%%*/<?php echo $_smarty_tpl->tpl_vars[\'imageUpload\']->value;?>
/*/%%SmartyNocache:25970513f722d28b171-36590007%%*/';?>
orginal/<?php echo '/*%%SmartyNocache:25970513f722d28b171-36590007%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value[\'images\'];?>
/*/%%SmartyNocache:25970513f722d28b171-36590007%%*/';?>
"  >
                    <div class="framehb imgd11">
                        <div class="hbimg">
                            <img src="<?php echo '/*%%SmartyNocache:25970513f722d28b171-36590007%%*/<?php echo $_smarty_tpl->tpl_vars[\'imageUpload\']->value;?>
/*/%%SmartyNocache:25970513f722d28b171-36590007%%*/';?>
thumbxx/<?php echo '/*%%SmartyNocache:25970513f722d28b171-36590007%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value[\'images\'];?>
/*/%%SmartyNocache:25970513f722d28b171-36590007%%*/';?>
" title="Baxton - Argonne Queen 5 Piece Wooden Modern Bedroom Set" alt="Baxton - Argonne Queen 5 Piece Wooden Modern Bedroom Set" />
                        </div>
                    </div>
                    <div class="clear">
                    </div>
                </a>
                <div class="thumb-view">
                
                </div>
            </div>
        </div>
        <div class="product-description">
            <div class="pd-name"><h1><?php echo '/*%%SmartyNocache:25970513f722d28b171-36590007%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value[\'name\'];?>
/*/%%SmartyNocache:25970513f722d28b171-36590007%%*/';?>
</h1></div>
            <div class="product-price">
               <div class="pctemp">
                    MÃ£ SP :  
                    </div>
                <?php echo '/*%%SmartyNocache:25970513f722d28b171-36590007%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_PRICE\']->value;?>
/*/%%SmartyNocache:25970513f722d28b171-36590007%%*/';?>
 : <span class="sub1 chudam"><?php echo '/*%%SmartyNocache:25970513f722d28b171-36590007%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_CURRENCY\']->value;?>
/*/%%SmartyNocache:25970513f722d28b171-36590007%%*/';?>
 <?php echo '/*%%SmartyNocache:25970513f722d28b171-36590007%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value[\'price\'];?>
/*/%%SmartyNocache:25970513f722d28b171-36590007%%*/';?>
 </span>
            </div>
            <div class="pctemp">
                <p></p>
            </div>

            <div class="pctemp">
                <a href="<?php echo '/*%%SmartyNocache:25970513f722d28b171-36590007%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:25970513f722d28b171-36590007%%*/';?>
cart/add/id/<?php echo '/*%%SmartyNocache:25970513f722d28b171-36590007%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value[\'id\'];?>
/*/%%SmartyNocache:25970513f722d28b171-36590007%%*/';?>
" class="FancyFormRadio FancyFormRadio-current" style="float:left">Add to  cart</a>
                    <a href="<?php echo '/*%%SmartyNocache:25970513f722d28b171-36590007%%*/<?php echo $_smarty_tpl->tpl_vars[\'baseUrl\']->value;?>
/*/%%SmartyNocache:25970513f722d28b171-36590007%%*/';?>
product" class="FancyFormRadio FancyFormRadio-current" style="float:left;margin-left:5px">Back to shopping</a>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear">
</div>
<div class="pcdetails">
    <div id="usual7" class="usual">
        <div class="line7" id="tab1">
            <p style="text-align: justify;"><span style="color: #343434; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; line-height: 20px;"><?php echo '/*%%SmartyNocache:25970513f722d28b171-36590007%%*/<?php echo $_smarty_tpl->tpl_vars[\'PRODUCT_DATA\']->value[\'content\'];?>
/*/%%SmartyNocache:25970513f722d28b171-36590007%%*/';?>
</span></p>
        </div>
        <div class="clear"></div>
    </div>
</div>

</div>
<?php }} ?>