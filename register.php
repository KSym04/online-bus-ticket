<?php
// Add configuration.
require( 'app/config.php' );

$site_title = 'Register an Account / JAM Liner Inc.';
$active_page = 'register';

// If user is logged in redirect.
if( isset( $_COOKIE['user_logged_in'] ) ) {
	header("Location: " . BASE_URL );
	exit;
}

// Call header.
include( 'app/view/header.php' );

// Call body.
include( 'app/view/register.php' );

// Call footer.
include( 'app/view/footer.php' );
