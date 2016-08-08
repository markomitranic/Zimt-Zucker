$(document).ready(function() {

	// A nice fadein effect for the body
	$("body").css("display", "none");
	$("body").fadeIn(1000);



	// Menu links for the categories
	$('.product-category-link').on('click', function(e) {
		e.preventDefault();
		var category = $(this).data('category');
		changeContents(category);
		$("#svi-proizvodi").fadeOut(500);  
		$("#proizvod-detalji").fadeIn(500); 
	});

	// Listener for buying stuff
	$('#add-to-cart').on('click', function() {
		if (cookieExists('ordered') && getCookie('ordered') !== '[]') {
			addCookieData($(this).attr('data-id'), getCookie('ordered'));
		} else {
			addCookieData($(this).attr('data-id'), false);
		};
		toggleCartButton(getCookie('ordered')); // Jednom nakon loada
		replaceCartData(JSON.parse(getCookie('ordered')));	
	});

	toggleCartButton(getCookie('ordered')); // Jednom nakon loada

	// Listen for cart showing
	$('#checkout-button').on('click', function() {
		$('#checkout-div').fadeIn('slow');
		replaceCartData(JSON.parse(getCookie('ordered')));
	});

	// Listen for cart Hide
	$('#checkout-div .close-window').on('click', function() {
		$('#checkout-div').fadeOut('slow');
	});

	// Listen for next Step
	$('#cart-list button').on('click', function(e) {
		if (cookieExists('ordered') && getCookie('ordered') !== '[]') {
			e.preventDefault();
			$('#cart-list').slideUp('slow');
			$('#cart-form').slideDown('slow');			
		}
	});

	// Listen On form send
	$('#order-form').on('submit', function(e) {
		e.preventDefault();
		if ($(this).valid()) {
			sendEmailOrder(objectFromForm($(this)));
		}
	});

	// Listen for previous step
	$('#form-back-button').on('click', function(e) {
		e.preventDefault();
		$('#cart-form').slideUp('slow');
		$('#cart-list').slideDown('slow');
	});

	
	// Mobile menu
	$("#mobile-dugme").click(function(){
		$("#levo_menu").fadeIn(200);
		$("#mobile-dugme2").fadeIn(200);
	});		

	$("#mobile-dugme2").click(function(){
		$("#levo_menu").fadeOut(200);
		$("#mobile-dugme2").fadeOut(200);
	});		


}); 



// jquery extend function
$.extend(
{
    redirectPost: function(location, args)
    {
        var form = $('<form></form>');
        form.attr("method", "post");
        form.attr("action", location);

        $.each( args, function( key, value ) {
            var field = $('<input></input>');

            field.attr("type", "hidden");
            field.attr("name", key);
            field.attr("value", value);

            form.append(field);
        });
        $(form).appendTo('body').submit();
    }
});