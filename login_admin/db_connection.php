<?php

//SQL connection credentials
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