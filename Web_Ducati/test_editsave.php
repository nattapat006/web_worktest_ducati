<?php	/*session_start();  if(!isset($_SESSION["uch"])){	echo "<CENTER><FONT SIZE=5 COLOR=red>¡ÃØ³Ò Login!</FONT><BR><FONT SIZE=5 color=yelloe ><A HREF=logout.php>¡ÅÑºË¹éÒ Login</A></FONT></CENTER>"; exit();	} */




	include("test_connect.php"); // save
	$sql = "UPDATE mb_data SET username = '".$_POST["UserName"]."' , password = '".$_POST["Password"]."' , name = '".$_POST["name"]."',sex = '".$_POST["sex"]."',ID_Card = '".$_POST["id_card"]."',telephone = '".$_POST["Telephone"]."',Email = '".$_POST["Email"]."', editdate=NOW() WHERE id = '".$_POST["id"]."' ";
	
	


	$query = mysqli_query($conn,$sql);
	if($query){
	echo "<script type='text/javascript'>";
	echo "alert('Save  Succesfuly');";
	echo "window.location = 'list.php' ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Save again');";
	echo "</script>";
}
	mysqli_close($conn);
?>
