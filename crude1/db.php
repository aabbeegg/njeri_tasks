<?php
$servername = "db";
$username = "user1";
$password = "password";
$dbname = "app1";
// creating connection 
$conn = new mysqli ($servername, $username, $password, $dbname);
// check connection 
if ($conn->connect_error){
    die("Connection failed; " . $conn->connect_error);
}
?>
