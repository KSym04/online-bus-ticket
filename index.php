<?php
// Add configuration.
require( 'app/config.php' );

$site_title = 'JAM Liner Inc.';
$active_page = 'home';

// Call header.
include( 'app/view/header.php' );

// Call body.
include( 'app/view/home.php' );

// Call footer.
include( 'app/view/footer.php' );
