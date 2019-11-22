<?php
$hostname   = getenv('DB_HOSTNAME');
$username   = getenv('DB_USER');
$password   = getenv('DB_PASS');
$dbname     = getenv('DB_NAME');
$connection = mysqli_connect($db_hostname, $db_user, $db_pass, $db_name);
?>