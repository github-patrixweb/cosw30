<?php
// Create environment variables

$db_hostname   = getenv('DB_HOSTNAME');
$db_user   = getenv('DB_USER');
$db_pass   = getenv('DB_PASS');
$db_name     = getenv('DB_NAME');

/* these are for local use
$db_hostname   = 'denal.sgedu.site';
$db_user   = 'denal305';
$db_pass   = 'Lb2019!';
$db_name     = 'denal305_UI';
*/
// Establish the connection to the database
$connection = mysqli_connect($db_hostname, $db_user, $db_pass, $db_name);
?>