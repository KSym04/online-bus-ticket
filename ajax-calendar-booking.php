<?php

// Add configuration.
require( 'app/config.php' );

// Pass data here via Ajax.
if( !empty( $_COOKIE['user_id'] ) && !empty( $_POST['book_date'] ) ) {

	$book_date = $_POST['book_date'];

	// select calendar.
	$reserved_seat = mysqli_query( $mysqli, "SELECT seat_num FROM obt_booking WHERE book_date = '{$book_date}' AND ( status = 'On Hold' OR status = 'Paid' )");

	$closed_seat = [];
	while( $row = mysqli_fetch_assoc( $reserved_seat ) ) {
		$temp_seat = explode( ",", $row['seat_num'] );
		foreach( $temp_seat as $ts ) {
			$closed_seat[] = $ts;
		}
	}

	echo json_encode( $closed_seat );

}
