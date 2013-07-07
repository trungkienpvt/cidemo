 <?php
 for($i=1;$i<=count($product_list);$i++)
 {
 	$productName = $obj_string->removeunicode($product_list[$i-1]['name']);
 	$productName = str_replace(' ',"-",$productName).'.html';
?>
<div class="masonry-item product span3">
    <div class="image">
        <a href="<?php print $baseUrl?>product/<?php print $product_list[$i-1]['rid']?>/<?php print $productName ?>">
            <img src="<?php print $imageUpload?>thumbx/<?php print $product_list[$i-1]['images']?>" alt="shirt"/>
        </a>
    </div>
    <!-- /.image -->
    <div class="details">
        <a href="<?php print $baseUrl?>product/<?php print $product_list[$i-1]['rid']?>/<?php print $productName ?>">
            <h4 class="title"><?php print $product_list[$i-1]['name']?></h4>
            <span class="price">
                <?php print $product_list[$i-1]['price']?>
                    <span>( -<span class="discountrate">
                10
        </span>% )</span>
        <a href="<?php print $baseUrl?>product/<?php print $product_list[$i-1]['rid']?>/<?php print $productName?>" 
class="FancyFormRadio FancyFormRadio-current" style="float:left;margin-right:10px">View Detail</a>
	<a href="<?php print $baseUrl?>cart/add/id/<?php print $product_list[$i-1]['id'] ?>" class="FancyFormRadio 
FancyFormRadio-current" style="float:left">Add to  cart</a>
            <span class="banner sale">Sale</span>
        </a>
    </div>
    <!-- /.details -->
</div>	
<?php }?>
	