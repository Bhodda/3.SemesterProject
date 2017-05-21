var sum = 0;
var num = 1;

$(document).ready(function() {
	//Assign the producets a price date
	$("#product1").data("price", '49,00').data("name", 'Burger');
	$("#product2").data("price", '54,00').data("name", 'Cheese Burger');
	$("#product3").data("price", '54,00').data("name", 'Bacon burger');
	$("#product4").data("price", '59,00').data("name", 'Bacon Cheeseburger');
	$("#product5").data("price", '64,00').data("name", 'Double Burger');
	$("#product6").data("price", '69,00').data("name", 'Double Cheeseburger');
	$("#product7").data("price", '69,00').data("name", 'Double Bacon Burger');
	$("#product8").data("price", '74,00').data("name", 'Double Bacon Cheese Burger');
	$("#product9").data("price", '39,00').data("name", 'Snack box');
	$("#product10").data("price", '89,00').data("name", 'Burger Menu');
	$("#product11").data("price", '94,00').data("name", 'Cheeseburger Menu');
	$("#product12").data("price", '99,00').data("name", 'Bacon Cheeseburger Menu');
	$("#product13").data("price", '104,00').data("name", 'Double Burger Menu');
	$("#product14").data("price", '109,00').data("name", 'Double Cheeseburger Menu');
	$("#product15").data("price", '109,00').data("name", 'Double Bacon Burger Menu');
	$("#product16").data("price", '114,00').data("name", 'Double Bacon Cheeseburger Menu');
	$("#product17").data("price", '29,00').data("name", 'Fries');

	//Adding the requested producted to the shopping cart
	$(".add-to-check-out").on("click", function(evt) {
		var productID = $(this).attr("id");
		$("<div>", {
			html: "<div class='remove-product'><button class='remove-btn' id=" + productID + " data-num=" + num++ +">-</button></div><div class='selected-prod-name'><textarea readonly name='order_details' class='selected-prod-title prod-style'>1x " + $(this).data("name") + "</textarea></div><div class='selected-prod-price'><p>kr. " + $(this).data("price") + "</p></div>",
			"class": 'selected-product animated fadeInDown', "data-price": $(this).data("price")
		}).prependTo("#check-out");
		//summing up the overall price
		sum = sum + parseInt($(this).data("price"));
		$("#subtotal").text("kr. " + sum);

		//discount from subtotal
		discount = parseInt(sum/100*20);
		$("#discount").text("kr. " + discount);

		//total amount
		sumtotal = parseInt(sum-discount);
		$("#sumtotal").text("kr. " + sumtotal);
	});
    
	//Delete product from the shopping cart
	$("#check-out").on("click", ".remove-product", function(evt) {
		$(this).parent("div").remove();
		sum = sum - parseInt($(this).parent("div").data("price"));
		discount = discount = parseInt(sum/100*20);
		sumtotal = parseInt(sum-discount);
		$("#subtotal").text("kr. " + sum);
		$("#discount").text("kr. " + discount);
		$("#sumtotal").text("kr. " + sumtotal);
	});


	// $("#check-out").click(function(e) {
	// 	$(".selected-product").addClass("fadeOutUp");
	// 	$(".selected-product").removeClass("fadeInDown");
	// });


});