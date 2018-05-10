<?php
// Add configuration.
require( 'app/config.php' );

$site_title = 'Book Ticket / JAM Liner Inc.';
$active_page = 'book-ticket';

// Call header.
include( 'app/view/header.php' );

// Call body of book ticket.
include( 'app/view/book-ticket.php' );

// Call footer.
include( 'app/view/footer.php' );
