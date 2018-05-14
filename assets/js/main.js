$(document).ready(function(){

	// login box
	var loginBox = $('#login-box');

	$('.login > a').on( 'click', function(e){
		e.preventDefault();
		loginBox.toggleClass('show');
	});

	// menu active state
	var domBody = $('body');
	var pageMenu = $('.menu');

	if( domBody.hasClass('home') ) {
		pageMenu.find('.menu-home')
				.parent('li')
				.addClass('active');
	}

	if( domBody.hasClass('book-ticket') ) {
		pageMenu.find('.menu-book-ticket')
				.parent('li')
				.addClass('active');
	}

	// book ticket.
	$.fn.digits = function(){
		return this.each(function(){
			$(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );
		})
	}

	$('#seat-list button:enabled').on( 'click', function(e){
		$(this).addClass('reserved');
		$('#fare').text( $('#seat-list .reserved').length * farePrice + ' PHP' ).digits();
	});
});
