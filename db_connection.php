<?php
//SQL connection credentials
//if I get to host the website online, I need to put the address here
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "starbucks_project"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection, if connection is not established kill it and display the connection error
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>