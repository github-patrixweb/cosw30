<?php
$db_hostname   = getenv('DB_HOSTNAME');
$db_username   = getenv('DB_USER');
$db_password   = getenv('DB_PASS');
$db_dbname     = getenv('DB_NAME');
$connection = mysqli_connect($db_hostname, $db_user, $db_pass, $db_name);
?>