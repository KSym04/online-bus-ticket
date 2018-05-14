<?php
/**
 * BASE URL
 */
DEFINE( 'BASE_URL', 'http://rak.test/online-bus-ticket/' );

// Database Host.
$databaseHost = 'localhost';

// Database Name.
$databaseName = 'online_bus_ticket';

// Database User.
$databaseUsername = 'root';

// Database Pass.
$databasePassword = '';

// Initiate MySQL connection.
$mysqli = mysqli_connect( $databaseHost, $databaseUsername, $databasePassword, $databaseName );
