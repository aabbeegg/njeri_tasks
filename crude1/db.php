<?php
$servername = "db";
$username = "root";
$password = "password";
$dbname = "studentinfo";
// creating connection 
$conn = new mysqli ($servername, $username, $password, $dbname);
// check connection 
if ($conn->connect_error){
    die("Connection failed; " . $conn->connect_error);
}
?>
