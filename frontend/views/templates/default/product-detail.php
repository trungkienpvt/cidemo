<div class="span12">
<div class="lead-sub">
    <?php print $BREAD_CRUMB?>
</div>
<div class="clear"></div>
<div class="product-details">
    <div class="pdhme">
        <div class="p-item">
            <div align="center" class="phimg zoomp">
                <a rel="lightbox" title="<?php echo $PRODUCT_DATA['name']?>" href="<?php print $PREDATA['imageUpload']?>orginal/<?php echo $PRODUCT_DATA['images']?>"  >
                    <div class="framehb imgd11">
                        <div class="hbimg">
                            <img src="<?php print $imageUpload?>thumbxx/<?php print($PRODUCT_DATA['images'])?>" title="<?php print($PRODUCT_DATA['name'])?>" alt="<?php print($PRODUCT_DATA['name'])?>" />
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
            <div class="pd-name"><h1><?php print $PRODUCT_DATA['name']?></h1></div>
            <div class="product-price">
               <div class="pctemp">
                    MÃ£ SP :  <?php print $PRODUCT_DATA['name']?>
                    </div>
                <?php print $this->lang->line("PRICE")?> : <span class="sub1 chudam"><?php print $this->lang->line("CURRENCY")?> <?php print $PRODUCT_DATA['price']?> </span>
            </div>
            <div class="pctemp">
                <p></p>
            </div>
            <div class="pctemp">
                <a href="<?php print $baseUrl?>cart/add/id/<?php print $PRODUCT_DATA['id'] ?>" class="FancyFormRadio FancyFormRadio-current" style="float:left">Add to  cart</a>
                    <a href="<?php print $baseUrl ?>product" class="FancyFormRadio FancyFormRadio-current" style="float:left;margin-left:5px">Back to shopping</a>
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
            <p style="text-align: justify;"><span style="color: #343434; font-family: 'Trebuchet MS', sans-serif; font-size: 13px; line-height: 20px;"><?php print $PRODUCT_DATA['content']?></span></p>
        </div>
        <div class="clear"></div>
    </div>
</div>

</div>
