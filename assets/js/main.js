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

	$('#seat-list').on('click', 'button:enabled', function(){
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
            url: "ajax-process-booking.php",
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

	// admin cancel
	$('.btn-cancel-now').on( 'click', function(event){
		event.preventDefault();
		var bookID = $(this).attr('data-book-id');
		console.log(bookID);
		$.ajax({
            type: "POST",
            url: "ajax-cancel-booking.php",
            data: "book_id=" + bookID,
            success: function(data){
				// resets
				setTimeout(function(){
					$('#status_id'+bookID).html('<span class="cancel-label">Cancelled</span>');
					$('#payment_id'+bookID).html('<span class="cancel-label">Cancel</span>');
					$('[data-book-id="'+bookID+'"]').parent('td').html('<span class="cancel-label">-</span>');
				}, 1000 );
			}
        });
	});

	// calendar
	$('#book_date').on( 'change', function(event){
		event.preventDefault();
		var book_date = $(this).val();
		$.ajax({
            type: "POST",
            url: "ajax-calendar-booking.php",
			data: "book_date=" + book_date,
            success: function(data){
				var obj = JSON.parse(data);
				console.log(obj);
				$('#fare').text('-');
				if( obj == '' ) {
					$('#seat-list li').each(function(i){
						i=i+1;
						$(this).html('<button type="button" value="S'+[i]+'">S'+[i]+'</button>');
					});
				} else {
					$('#seat-list li').each(function(i){
						i=i+1;
						if( obj.includes( 'S'+[i] ) ) {
							$(this).html('<button class="notavailable" disabled>S'+[i]+'</button>');
						} else {
							$(this).html('<button type="button" value="S'+[i]+'">S'+[i]+'</button>');
						}
					});
				}
			}
        });
	});

});
