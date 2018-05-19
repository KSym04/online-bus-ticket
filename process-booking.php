<?php

// Add configuration.
require( 'app/config.php' );

// Pass data here via Ajax.
if( !empty( $_COOKIE['user_id'] ) && !empty( $_POST['book_date'] ) && !empty( $_POST['book_seats'] ) ) {

	$book_date = $_POST['book_date'];
	$book_seats = $_POST['book_seats'];

	// count.
	$book_seats_count = count( explode( ",", $_POST['book_seats'] ) );

	$fare = $_POST['fare'] * $book_seats_count;
	$user_id = $_COOKIE['user_id'];

	// insert.
	mysqli_query( $mysqli, "INSERT INTO obt_booking( user_id, book_date, fare, seat_num, status ) VALUES( $user_id, '$book_date', $fare, '$book_seats', 'On Hold' )");

	// email order and QR code logic below.
	// ..................
	// .. INSERT HERE ...
	// ..................

	// return message.
	echo 'Successfully booked a ticket.';

}
