<?php /* Smarty version Smarty 3.1.4, created on 2013-03-15 21:51:31
         compiled from "frontend/views/templates/default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:244615143fa53cdc019-04370528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81b7e99724e59b65bc9d0f7d38f05ab2bd7a5b40' => 
    array (
      0 => 'frontend/views/templates/default\\index.tpl',
      1 => 1362500676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244615143fa53cdc019-04370528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imagePath' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5143fa53dc408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5143fa53dc408')) {function content_5143fa53dc408($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>

<body>
<div class="wrapper">
<?php echo $_smarty_tpl->getSubTemplate ("headerTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>


<!-- /.row -->
<section id="body">
<section id="slideshow" class="row">
    <div class="span12 slideshow">
        <div class="flexslider">
            <ul class="slides unstyled">
                  <li class="slide"><img style="cursor: pointer;" src="<?php echo '/*%%SmartyNocache:244615143fa53cdc019-04370528%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:244615143fa53cdc019-04370528%%*/';?>
banner_4da04049.jpg" class="slide-img" /></li>
                  <li class="slide"><img style="cursor: pointer;" src="<?php echo '/*%%SmartyNocache:244615143fa53cdc019-04370528%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:244615143fa53cdc019-04370528%%*/';?>
banner_af21d0c9.jpg" class="slide-img" /></li>
                  <li class="slide"><img style="cursor: pointer;" src="<?php echo '/*%%SmartyNocache:244615143fa53cdc019-04370528%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:244615143fa53cdc019-04370528%%*/';?>
banner_c9f95a0a.jpg" class="slide-img" /></li>
            </ul>
        </div>
        <!-- /.flexslider -->
        <div class="custom-flexslider-controls"></div>
        <!-- /.custom-flexslider-controls -->
    </div>
    <!-- /.span12.slideshow -->
</section>
<!-- /#slideshow.row -->
<div id="index" class="clearfix">
<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['layout_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div class="clear"></div>
<div style="clear:both;"></div>
</div>
<!-- /.row -->
<!-- /#index -->
</section>
<!-- /#body -->
<footer id="footer">
    <div class="row footer-columns">
        <section class="span4 contact-us">
            <h3>Vui lòng liên hệ </h3>
            phantrungkienvt@gmail.com<br />
            Hotline: 01265708465
        </section>
        <!-- /.span4 -->
    </div>
    <!-- /.row.footer-columns -->
    <div class="row payments-and-notices">
        <section class="span4 footer-social">
            <ul class="unstyled clearfix">
            </ul>
        </section>
        <!-- /.span4 -->
        <section class="span8 shop-notices">
            Copyright Â© 2012 Web9.vn
            | <!--<li><a href="http://www.shopify.com" target="_blank" title="Create your own online store with Shopify hosted ecommerce">Ecommerce Software</a> by Shopify</li>-->
        </section>
        <!-- /.span8 -->
    </div>
    <!-- /.row.payments-and-notices -->
</footer>
<!-- /#footer -->
</div>
<!-- /.wrapper -->
<div class="wrapper payment-methods">
    <div class="row">
        <div class="span6">
            <ul class="credit-cards clearfix">
                <li><img src="<?php echo '/*%%SmartyNocache:244615143fa53cdc019-04370528%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:244615143fa53cdc019-04370528%%*/';?>
icn_cc-visa.gif"  alt="Visa" /></li>
                <li><img src="<?php echo '/*%%SmartyNocache:244615143fa53cdc019-04370528%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:244615143fa53cdc019-04370528%%*/';?>
icn_cc-mastercard.gif" alt="MasterCard" /></li>
                <li><img src="<?php echo '/*%%SmartyNocache:244615143fa53cdc019-04370528%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:244615143fa53cdc019-04370528%%*/';?>
icn_cc-amex.gif" alt="Amex" /></li>
                <li><img src="<?php echo '/*%%SmartyNocache:244615143fa53cdc019-04370528%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:244615143fa53cdc019-04370528%%*/';?>
icn_cc-discover.gif" alt="Discover" /></li>
                <li><img src="<?php echo '/*%%SmartyNocache:244615143fa53cdc019-04370528%%*/<?php echo $_smarty_tpl->tpl_vars[\'imagePath\']->value;?>
/*/%%SmartyNocache:244615143fa53cdc019-04370528%%*/';?>
icn_cc-paypal.gif" tppabs="http://file.vina9.com/image/49092/icn_cc-paypal.gif" alt="PayPal" /></li>
            </ul>
            <!-- /.credit-cards -->
        </div>
        <!-- /.span6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.wrapper -->
</body>
</html>
<!-- Powered by Web9.vn -->	
<?php }} ?>