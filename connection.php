<?php

date_default_timezone_set('Asia/Calcutta');

session_start();
$servername = "209.99.16.19:3306";
$username = "Sagar";
$password = "VCNOW@2016";
$dbname = "vcnowu1c_MYSQL";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
?>
