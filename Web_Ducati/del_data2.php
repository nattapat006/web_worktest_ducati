<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	include("test_connect.php");

	mysqli_set_charset($conn,'UTF8');
	

	$id = $_GET["id"];
	$sql = "DELETE FROM mb_location
			WHERE id = '".$id."' ";
			

	$query = mysqli_query($conn,$sql);



	/*if(mysqli_affected_rows($conn)) 
	{
		
		 echo "Record delete successfully";
	}*/

	include("test_show.php");
	//mysqli_close($conn);
?>
