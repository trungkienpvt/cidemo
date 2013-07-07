<form action ="cart/update" name="form-cart" id="form-cart" method="post">
<div class="row">
    <div class="span12">
        <h1 class="featured"><?php print $this->lang->line('CART')?></h1>
    </div>
    <!-- /.span12 -->
</div>
<!-- /.row -->
<div class="span12">
<table id="rounded-corner" cellpadding="0" cellspacing="0" style="width:100%">
<tr>
  <th scope="col">QTY</th>
  <th scope="col">Item Description</th>
  <th scope="col">Item Image</th>
  <th scope="col" style="text-align:right">Item Price</th>
  <th scope="col" style="text-align:right">Sub-Total</th>
  <th scope="col" style="text-align:center">Action</th>
  
</tr>
<?php $i = 1; 
$nl = new NL_Checkout();
$returnUrl = "http://5sao.net.vn/ciapp";
$transactionInfo = "abc";
$receive = "phantrungkienvt@gmail.com";
$orderInfo = "abc";
$price = 100000;
$url = $nl->buildCheckoutUrl($returnUrl, $receive,$transactionInfo, $orderInfo, $price);

?>

<?php foreach ($cart->contents() as $items){
	
	$productName = $obj_string->removeunicode($items['name']);
 	$productName = str_replace(' ',"-",$productName).'.html';
?>
	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
	<tr>
	  <td><?php echo form_input(array("class" =>"submit_order", "id" =>$i.'qty', 'name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5', "onkeypress" =>"return submitEnter(event)")); ?></td>
	  <td>
		<?php echo $items['name']; ?>

			<?php if ($cart->has_options($items['rowid']) == TRUE): ?>

				<p>
					<?php foreach ($cart->product_options($items['rowid']) as $option_name => $option_value): ?>

						<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
					<?php endforeach; ?>
				</p>
			<?php endif; ?>
	  </td>
	  <td style="text-align:right"><img src="<?php echo $imageUpload ."thumb/" . $items['images']; ?>"/></td>	
	  <td style="text-align:right"><?php echo $cart->format_number($items['price']); ?></td>
	  <td style="text-align:right">VND <?php echo $cart->format_number($items['subtotal']); ?></td>
	  <td style="text-align:right"><a class="deleted-cart" rel="<?php echo $i.'qty'?>" href="javascript:void();"><img src="<?php echo $imagePath?>delete-icon.png"/></a> </td>
	</tr>
<?php $i++; ?>
<?php } ?>
<tr>
  <td colspan="2"> </td>
  <td class="right"><strong>Total</strong></td>
  <td class="right" colspan="4">VND <?php echo $cart->format_number($cart->total()); ?></td>
</tr>
</table>
</div>     
<div class="span12">
<ul class="exportlink">
<li><a class="submit-form" rel="form-cart" href="javascript:void(0)">Update your cart</a></li>
<li><a href="<?php echo $url?>"><img src="https://www.nganluong.vn/data/images/buttons/4.gif"/></a></li> 
</ul>
</div>
<input type="hidden" name="action_form" id="action_form" value="cart/update"/>
</form>
	