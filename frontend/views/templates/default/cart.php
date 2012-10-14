<script type="text/javascript">
function deleteItem(obj)
{
	if(confirm("Do you want to delete it now"))
	{		
		$("#" + obj).val(0);
		document.forms['form-cart'].submit();
	}
	else
		return false;
		
	}
function submitCart()
{
	document.forms['form-cart'].submit();

	}
function submitEnter(e)
{
	var keycode;
	if (window.event) 
		keycode = window.event.keyCode;
	else if (e) keycode = e.which;
	else return true;
	if (keycode == 13)
   	{
		document.forms['form-cart'].submit();
   	}
}

</script>
<?php echo form_open($baseUrl . "cart/update",'name="form-cart"'); ?>
<table cellpadding="0" cellspacing="0" style="width:98%" border="">
<tr>
  <th>QTY</th>
  <th>Item Description</th>
  <th>Item Image</th>
  <th style="text-align:right">Item Price</th>
  <th style="text-align:right">Sub-Total</th>
  <th colspan="2" style="text-align:center">Action</th>
  
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
	  <td><?php echo form_input(array("class" =>"text quantity", "id" =>$i.'qty', 'name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5', "onkeypress" =>"return submitEnter(event)")); ?></td>
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
	  <td style="text-align:right"><a class="" href="javascript:void(0);" onclick="deleteItem('<?php echo $i.'qty'?>')"><img src="<?php echo $imagePath?>/images_frontend/delete_icon.png"/></a> </td>
	  <td style="text-align:right"><a class="" href="<?php echo $baseUrl ?>product/<?php echo $items['rid']?>/<?php echo $productName?>"><img src="<?php echo $imagePath?>/images_frontend/search_icon.png"/></a> </td>
	</tr>

<?php $i++; ?>

<?php } ?>

<tr>
  <td colspan="2"> </td>
  <td class="right"><strong>Total</strong></td>
  <td class="right" colspan="4">VND <?php echo $cart->format_number($cart->total()); ?></td>
</tr>

</table>
<div style="width:158px;margin-top:10px;margin-bottom:5px;float:left">
<a class="FancyFormRadio FancyFormRadio-current" href="javascript:void(0)" onclick="submitCart()">Update your cart</a></div>
<div style="width:158px;margin-top:10px;margin-bottom:5px;float:left;margin-left:5px"><a class="FancyFormRadio FancyFormRadio-current" href="<?php echo $baseUrl?>product" >Back to shopping</a></div>

<div style="clear:both"></div>
<div style="float:right;margin-right:20px">
<ul class="exportlink">
<li><a href="<?php echo $url?>"><img src="https://www.nganluong.vn/data/images/buttons/4.gif"/></a></li> 
<li style="height:40px" ><a title="export to excell" class="icon " style="floaf:left" href="<?php echo $baseUrl?>cart/export_excell" >Export excell<img src="<?php echo $imagePath?>ExcelIcon.gif"/></a></li>
<li style="height:40px"><a class="icon " style="float:left" title="export to pdf" href="<?php echo $baseUrl?>cart/export_pdf" >Export pdf<img src="<?php echo $imagePath?>pdf_icon_small.gif"/></a></li>
</ul>
</div>

</form>
	