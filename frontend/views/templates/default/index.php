<?php print $PREDATA['HEADER']?>
<body>
<div class="wrapper">
<?php print $PREDATA['HEADER_TOP']?>
<?php print $PREDATA['MENU_TOP']?>
<!-- /.row -->
<section id="body">
<section id="slideshow" class="row">
    <div class="span12 slideshow">
        <div class="flexslider">
            <ul class="slides unstyled">
                  <li class="slide"><img style="cursor: pointer;" src="<?php print $imagePath?>banner_4da04049.jpg" class="slide-img" /></li>
                  <li class="slide"><img style="cursor: pointer;" src="<?php print $imagePath?>banner_af21d0c9.jpg" class="slide-img" /></li>
                  <li class="slide"><img style="cursor: pointer;" src="<?php print $imagePath?>banner_c9f95a0a.jpg" class="slide-img" /></li>
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
<div id="content" class="box">
<div class="span12">
<?php if($PREDATA['MESSAGE_SYSTEM_CONTENT']!=''):?>
<p class="msg warning">
<?php print $PREDATA['MESSAGE_SYSTEM_CONTENT'] ?></p>
<?php endif?>
</div>
</div> <!-- /content -->
<?php print $layout_content?>
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
                <li><img src="<?php print $imagePath?>icn_cc-visa.gif"  alt="Visa" /></li>
                <li><img src="<?php print $imagePath?>icn_cc-mastercard.gif" alt="MasterCard" /></li>
                <li><img src="<?php print $imagePath?>icn_cc-amex.gif" alt="Amex" /></li>
                <li><img src="<?php print $imagePath?>icn_cc-discover.gif" alt="Discover" /></li>
                <li><img src="<?php print $imagePath?>icn_cc-paypal.gif" alt="PayPal" /></li>
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
