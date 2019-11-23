<?php
$db_hostname   = getenv('DB_HOSTNAME');
$db_user   = getenv('DB_USER');
$db_pass   = getenv('DB_PASS');
$db_name     = getenv('DB_NAME');
$connection = mysqli_connect($db_hostname, $db_user, $db_pass, $db_name);
?>
