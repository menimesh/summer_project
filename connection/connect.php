<?php

$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "food_ordering";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>