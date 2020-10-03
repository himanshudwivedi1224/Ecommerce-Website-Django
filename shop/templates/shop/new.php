<form id="applyDiscountForm" method="post"
	action="index.php?action=show_discount"
	onsubmit="return validate();">

	<div id="shopping-cart">
		<div class="txt-heading">eCommerce software with discount
			coupon</div>
		<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>
<?php
if (isset($_SESSION["cart_item"])) {
	$total_quantity = 0;
	$total_price = 0;
	
	$discount = $discountPrice;
	$total_price_after_discount = 0;
	?>	
			<table class="tbl-cart" cellpadding="10" cellspacing="1">
			<tbody>
				<tr>
					<th style="text-align: left;">Name</th>
					<th style="text-align: left;">Code</th>
					<th style="text-align: right;" width="5%">Quantity</th>
					<th style="text-align: right;" width="10%">Unit
						Price</th>
					<th style="text-align: right;" width="10%">Price</th>
					<th style="text-align: center;" width="5%">Remove</th>
				</tr>	

					<?php
	foreach ($_SESSION["cart_item"] as $item) {
		$item_price = $item["quantity"] * $item["price"];
		?>
						<tr>
					<td><img src="<?php echo $item["image"]; ?>"
						class="cart-item-image" /><?php echo $item["name"]; ?></td>
					<td><?php echo $item["code"]; ?></td>
					<td style="text-align: right;"><?php echo $item["quantity"]; ?></td>
					<td style="text-align: right;"><?php echo "$ " . $item["price"]; ?></td>
					<td style="text-align: right;"><?php echo "$ " . number_format($item_price, 2); ?></td>
					<td style="text-align: center;"><a
						href="index.php?action=remove&code=<?php echo $item["code"]; ?>"
						class="btnRemoveAction"><img
							src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
						<?php
		$total_quantity += $item["quantity"];
		$total_price += ($item["price"] * $item["quantity"]);
		if ($total_price > $discount) {
			$total_price_after_discount = $total_price - $discount;
		}
	}
	?>
					<tr>
					<td colspan="2" align="right">Total:<input
						type="hidden" name="totalPrice"
						id="totalPrice"
						value="<?php echo $total_price; ?>"></td>
					<td align="right"><?php echo $total_quantity; ?></td>
					<td align="right" colspan="2"><strong><?php echo "$ " . number_format($total_price, 2); ?></strong></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3" align="right">Discount:<input
						type="hidden" name="discountPrice"
						id="discountPrice"
						value="<?php echo $discount; ?>"></td>
					<td align="right" colspan="2"><strong><?php echo "$ " . number_format($discount, 2); ?></strong></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3" align="right">Total after
						Discount:</td>
					<td align="right" colspan="2"><strong><?php echo "$ " . number_format($total_price_after_discount, 2); ?></strong></td>
					<td></td>
				</tr>
			</tbody>
		</table>		
		<?php
} else {
	?>
			<div class="no-records">Your Cart is Empty</div>
		<?php
}
?>
	</div>
</form>