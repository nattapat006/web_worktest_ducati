<?php
	include("test_connect.php");
	ini_set('display_errors', 1);
	error_reporting(~0);

	
	mysqli_set_charset($conn,'UTF8');
	

	$id = $_GET["id"];
	$sql = "DELETE FROM mb_data
			WHERE id = '".$id."' ";
	$query = mysqli_query($conn,$sql);
	
	$id2 = $_GET["id"];
	$sql2 = "DELETE FROM mb_location
			WHERE id = '".$id2."' ";
			

	$query2 = mysqli_query($conn,$sql2);


	/*if(mysqli_affected_rows($conn)) 
	{
		include("test_show.php");

		//echo "Record delete successfully";
	}*/

	include("test_show.php");
	//mysqli_close($conn);


?>

