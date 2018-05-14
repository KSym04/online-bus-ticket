<?php
/**
 * Logout
 */

// Add configuration.
require( 'app/config.php' );

$site_title = 'Logout / JAM Liner Inc.';

unset( $_COOKIE );
setcookie( "user_logged_in", false, time() - 3600 );
setcookie( "user_name", $row_result['user_name'], time() - 3600 );
setcookie( "user_fname", $row_result['user_fname'], time() - 3600 );
setcookie( "user_lname", $row_result['user_lname'], time() - 3600 );
setcookie( "user_email", $row_result['user_email'], time() - 3600 );
header("Location: " . BASE_URL );

exit;
