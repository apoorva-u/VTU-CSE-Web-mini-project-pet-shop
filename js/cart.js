$(document).ready(function() {
	var order = {
		housename :[],
		orderItems :[],
	};

	$(".cart-remove").on("click", function (){
		if($('.cartList ').children().length-4 == 0){
			$('#addItem').removeClass('d-none');
			$('#addItem').addClass('noItem list-group-item d-flex flex-row justify-content-around');
			$('.total ').remove();
			$('#placeOrder').prop('disabled',true);
		}
		let cartItem = $(this).closest(".cart-item");
		let data = cartItem.attr('data-product');
		cartItem.remove();
		let total = $('.total').text();
		console.log($('.total').attr('class'));

		$.post('/pawsome/remove-cart-item',{
			id : JSON.parse(data)['cart_id']
		});
	});

	$("#addaddress").on("click",function (){
		window.location.replace("/pawsome/address");
		})

	$("#placeOrder").on("click",function (){
		var checkBox = validateCheckBox();
		// checking atleast one checkBox is selected
		if(checkBox == 'none'){
			let alertBox =  $("<div></div>").text("Select a delivery address!");
			alertBox.addClass("alert alert-danger text-center alert-dismissible fade show");
			alertBox.attr("role","alert");
			let button = $("<button></button>");
			button.addClass("btn-close  text-center text-danger");
			button.attr({
				"type":'button',
				"data-bs-dismiss":"alert",
				"aria-label":'Close',
			});
			alertBox.append(button);
			$('nav').after(alertBox);
		}else{
			let data = [];
			$('.cart').each(function (idx, element){
				data.push( JSON.parse($(element).attr("data-product")));
			});
			console.log("about to post");
			$.post('/pawsome/place-order',{
				data : data,
				housename : checkBox
			}).done(function (data,status){
				let alertBox =  $("<div></div>").text("Order Placed successful");
				alertBox.addClass("alert alert-success text-center alert-dismissible fade show");
				alertBox.attr("role","alert");
				let button = $("<button></button>");
				button.addClass("btn-close  text-center text-success");
				button.attr({
					"type":'button',
					"data-bs-dismiss":"alert",
					"aria-label":'Close',
				});
				alertBox.append(button);
				$('nav').after(alertBox);

				window.location.replace("/pawsome/order-success");
			})
		}

	})
	
	function validateCheckBox() {
		let checkBox = $('.option');
		// loop to check atleaset one checkBox is checked
		for (let i=0;i<checkBox.length;i++) {
			if(checkBox[i].checked){
				$list = checkBox[i].closest('li');
				console.log("Got the address");
				return JSON.parse($list.dataset['shop'])['house_name'];
			}
		}
		return 'none';
	}


});
