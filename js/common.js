var sum = 0;
$(document).ready(function() {
	/* Adding product the the check-out*/
	$(".add-to-check-out").click(function() {
		var productID = this.getAttribute("data-prodID");
		$.get("includes/getProdInfo.php?product_id=" + productID, function(data) {
			console.log(data);
			if (data == false) {
				console.log("There is no information about the product");
			} else {
				console.log("Product information found");
				console.log(data.product_id);
				console.log(data.product_name);
				console.log(data.product_price);
				$("<div>", {
					html: "<div class='remove-product'><button class='remove-btn' id=" + data.product_id + ">-</button></div><div class='selected-prod-name'><textarea readonly name='product_name' class='selected-prod-title prod-style'> 1x " + data.product_name + "</textarea></div><div class='selected-prod-price'><p>kr. " + data.product_price + "</p></div>",
					"class": 'selected-product animated fadeInDown',
					"data-price": data.product_price,
					"data-productID": data.product_id,
					"data-product-name": data.product_name
				}).prependTo("#check-out");
			}
			$('.selected-product').length;
			var basketProd = $('.selected-product').length;
			/* Total price of selected products */
			sum = sum + parseInt(data.product_price);
			$("#subtotal").text("kr. " + sum.toFixed(2));
			/* Discount bsed on seleted products */
			discount = parseInt(sum / 100 * 20);
			$("#discount").text("kr. " + discount.toFixed(2));
			/* Total amount after discount */
			sumtotal = parseInt(sum - discount);
			$("#sumtotal").text("kr. " + sumtotal.toFixed(2));
			$("#basket-sum").text(basketProd);
		});
	});
	/* Remove selected product from a cart and recalculate total price */
	$("#check-out").on("click", ".remove-product", function(evt) {
		$(this).parent("div").remove();
		$('.selected-product').length;
		var basketProd = $('.selected-product').length;
		sum = sum - parseInt($(this).parent("div").data("price"));
		discount = discount = parseInt(sum / 100 * 20);
		sumtotal = parseInt(sum - discount);
		$("#subtotal").text("kr." + sum.toFixed(2));
		$("#discount").text("kr. " + discount.toFixed(2));
		$("#sumtotal").text("kr. " + sumtotal.toFixed(2));
		$("#basket-sum").text(basketProd);
	});
	/* Include information from first contact form into check-out */
	$('input[name=order-name]').on("keyup", function(e) {
		$('[name=name]').val($(this).val())
	});
	$('input[name=order-phone]').on("keyup", function(e) {
		$('[name=phone_nr]').val($(this).val())
	});
	$(".confirm-btn").click(function(event) {
		// JWB: Use this when debugging to turn off the sending of the form data when submit is clicked
		// event.preventDefault();
		// Create the order_line
		var order_line = "";
		// for each of the products in the order
		$(".selected-product").each(function() {
			// get the productID
			var productName = this.getAttribute("data-product-name");
			console.log("added: " + productName);
			// add to order-line
			order_line += productName + "; ";
		});
		// add the order_line values to the hidden form element
		$("#order-line").attr("value", order_line);
		console.log("The final order-line: " + $("#order-line").attr("value"));
	});
});