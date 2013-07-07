<header id="header" class="row">
    <div class="span12 clearfix">
        <div class="logo">
            <a href="index.htm" ><img src="<?php print $imagePath ?>logo.png" alt="" /></a>
        </div>
        <!-- /.logo -->	
        <section class="fr searchform" style="margin:0 0 15px;">
            <form method="get" action="http://noithat2.webdepqua.com/tim" enctype="multipart/form-data">
                <input value="Go" class="submit" type="submit" />
                <input class="text" name="q" type="text" />
            </form>
        </section>
        <!-- /.span6 -->
        <div class="cart-summary">
            <a href="<?php print $base_url?>cart""  class="clearfix">
                <div class="icon"><?php print $this->lang->line("View Cart")?></div>
                <div class="details">
                	<span><?php print $menuLang?></span>
                    <span class="note"><?php print $this->lang->line("View Cart")?></span>
                    <span class="item-count"><span style="color:red"><?php print $COUNT_ITEM_CART?></span> <?php print $this->lang->line("Product")?></span>
                </div>
                <!-- /.details -->
            </a>
        </div>
        <!-- /.cart-summary -->
    </div>
    <!-- /.span12 -->
</header>
<!-- /#header.row -->


			