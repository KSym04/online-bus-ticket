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

	// save booking via ajax
	$('#book-ticket-form').on( 'submit', function(event){
		event.preventDefault();

		$(this).find('#book-now').text('Processing...');
		$(this).find('#book-result').hide();

		// get all clicked reserved.
		var bookSeats = []
		$('#seat-list .reserved').each(function(i, selected){
			bookSeats[i] = $(selected).val();
		});

		// calendar value and price.
		var bookDate = $("#book_date").val();

        $.ajax({
            type: "POST",
            url: "process-booking.php",
            data: "book_seats=" + bookSeats + "&book_date=" + bookDate + "&fare=" + farePrice,
            success: function(data){
				// resets
				setTimeout(function(){
					$('#book-ticket-form').find('#book-now').text('Done');
				}, 1000 );

				// show notice
				setTimeout(function(){
					$('#book-result').text(data).fadeIn();
				}, 2000 );

				// resets
				setTimeout(function(){
					// make selection not available anymore.
					$('#seat-list .reserved').each(function(){
						$(this).removeClass('reserved').addClass('notavailable');
						$(this).attr("disabled", true);
					});

					// reset price.
					$('#fare').text('-');
				}, 3000 );

				// resets
				setTimeout(function(){
					$('#book-result').fadeOut();
					$('#book-ticket-form').find('#book-now').text('Book Now');
				}, 4000 );

			}
        });

	});

});
