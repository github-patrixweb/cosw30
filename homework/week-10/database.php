<?php
// Create environment variables
$db_hostname   = getenv('DB_HOSTNAME');
$db_user   = getenv('DB_USER');
$db_pass   = getenv('DB_PASS');
$db_name     = getenv('DB_NAME');

// Establish the connection to the database
$connection = mysqli_connect($hostname, $username, $password, $dbname);
?>