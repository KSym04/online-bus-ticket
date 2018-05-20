<?php

// Add configuration.
require( 'app/config.php' );

// Pass data here via Ajax.
if( !empty( $_COOKIE['user_id'] ) && $_COOKIE['user_permission'] == 1 ) {

	$ticket_id = $_POST['book_id'];

	// update.
	mysqli_query( $mysqli, "UPDATE obt_booking SET status = 'Cancelled' WHERE ticket_id = $ticket_id");

	// return message.
	echo 'Successfully cancel a ticket.';

}
