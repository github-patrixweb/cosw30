<?php
/*
Name: patrixweb
Server: 50.62.209.47:3306
Password halloween19fall

SITE_USERS
first_name
last_name
email
password
ip
join_date*/

$servername = "50.62.209.47:3306";
$username = "patrixweb";
$password = "halloween19fall";
$dbname = "patrixweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO SITE_USERS (first_name, last_name, email)
VALUES ('Jane', 'Doe', 'jane@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
