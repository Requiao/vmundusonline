<?php
//Description: Perform conection to database.

//connect to database
$servername = "localhost";
$username = "mundus";
$password = "Sh@pei3w:_)932!";
$database = "mundus";

// Create connection
$conn = connectdb($servername, $username, $password, $database);
function connectdb($servername, $username, $password, $database) {
	$conn = mysqli_connect($servername, $username, $password, $database);
	return $conn;
}
$conn->set_charset("utf8");
?>