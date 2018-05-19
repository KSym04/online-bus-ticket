<?php
// Add configuration.
require( 'app/config.php' );

$site_title = 'Login / JAM Liner Inc.';
$active_page = 'login-page';

// set message default.
$error_message = '';

if( !empty( $_POST['submit'] ) ) {

	$user_name = mysqli_real_escape_string( $mysqli, $_POST['user_name'] );
	$user_password = mysqli_real_escape_string( $mysqli, $_POST['user_password'] );

	// checking empty fields
	if( empty($user_name) || empty($user_password) ) {
		$error_message = '<div class="error-message">Cannot process login empty field detected.</div>';
	} else {

		$user_password = substr( md5( $user_password ), 0, 19 );

		// insert data to database.
		$result = mysqli_query( $mysqli, "SELECT * FROM obt_users WHERE user_name = '$user_name' AND user_password = '$user_password'");
		if( $result->num_rows > 0 ) {
			$row_result = mysqli_fetch_assoc( $result );
			setcookie( "user_logged_in", true, time() + 3600 );
			setcookie( "user_id", $row_result['user_id'], time() + 3600 );
			setcookie( "user_name", $row_result['user_name'], time() + 3600 );
			setcookie( "user_fname", $row_result['user_fname'], time() + 3600 );
			setcookie( "user_lname", $row_result['user_lname'], time() + 3600 );
			setcookie( "user_email", $row_result['user_email'], time() + 3600 );
			$error_message = '<div class="success-message">Successfully login, wait while we are redirecting you...</div>
							  <meta http-equiv="refresh" content="3;url='.BASE_URL.'book-ticket.php">';

		} else {
			$error_message = '<div class="error-message">Login failed, please try again.</div>';
		}

	}
}

// Call header.
include( 'app/view/header.php' );

// Call body.
include( 'app/view/login.php' );

// Call footer.
include( 'app/view/footer.php' );
