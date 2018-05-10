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
});
