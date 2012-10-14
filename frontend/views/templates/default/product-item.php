 <?php
 for($i=1;$i<=count($product_list);$i++)
 {
 	$productName = $obj_string->removeunicode($product_list[$i-1]['name']);
 	$productName = str_replace(' ',"-",$productName).'.html';
 	if($i%3==0){
 ?>
<li class="last">
<?php }else{?>
<li class="" >
<?php }?>
	
	<a href="<?php print $baseUrl?>product/<?php print $product_list[$i-1]['rid']?>/<?php print $productName ?>"><img src="<?php print $imageUpload?>thumbx/<?php print $product_list[$i-1]['images']?>" alt="shirt" data-tooltip="sticky" onmouseover="changeImage('<?php print $imageUpload?>orginal/<?php print $product_list[$i-1]['images'] ?>')"  /></a>
                            <span><?php print $product_list[$i-1]['name']?></span>
                            <p><span class="price">VND <?php print $product_list[$i-1]['price']?></span></p>
                            <p>
	<a href="<?php print $baseUrl?>product/<?php print $product_list[$i-1]['rid']?>/<?php print $productName?>" class="FancyFormRadio FancyFormRadio-current" style="float:left;margin-right:10px">View Detail</a>
	<a href="<?php print $baseUrl?>cart/add/id/<?php print $product_list[$i-1]['id'] ?>" class="FancyFormRadio FancyFormRadio-current" style="float:left">Add to  cart</a>
	</p>
</li>
<?php }?>
	