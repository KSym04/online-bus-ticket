<?php
// Add configuration.
require( 'app/config.php' );

$site_title = 'Dashboard / JAM Liner Inc.';
$active_page = 'dashboard';

// If user is logged in redirect.
if( empty( $_COOKIE['user_logged_in'] ) ) {
	header("Location: " . BASE_URL );
	exit;
}

// Call header.
include( 'app/view/header.php' );

// Call body.
include( 'app/view/dashboard.php' );

// Call footer.
include( 'app/view/footer.php' );
