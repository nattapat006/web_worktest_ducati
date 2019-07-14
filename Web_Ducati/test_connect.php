<?php 
    $servername = "127.0.0.1";
	$username = "root";
	$password = "123456";
	$dbname = "dt_member";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_set_charset($conn,'UTF8');
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);

	}

?>