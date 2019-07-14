
<?php 
	include("test_connect.php");
			$sql1 = "UPDATE mb_data SET 
			username = '".$_POST["username"]."' ,
			password = '".$_POST["password"]."' ,
			name = '".$_POST["name"]."' ,
			sex = '".$_POST["sex"]."',
			ID_Card = '".$_POST["ID_Card"]."',
			telephone = '".$_POST["telephone"]."',
			Email = '".$_POST["Email"]."'
			WHERE id = '".$_POST["id"]."' ";
			

		$query1 = mysqli_query($conn,$sql1);

			$sql2 = "UPDATE mb_location SET 
			house_no = '".$_POST["house_no"]."',
			village_no = '".$_POST["village_no"]."',
			village = '".$_POST["village"]."',
			road = '".$_POST["road"]."',
			sub_district = '".$_POST["sub_district"]."',
			district = '".$_POST["district"]."',
			province = '".$_POST["province"]."',
			postal_code = '".$_POST["postal_code"]."'
			WHERE id = '".$_POST["id"]."' ";
        $query2 = mysqli_query($conn,$sql2);

	if($query1) 
	{
	//include("new_edit.php?id=$_POST[id]");
	$id=$_POST['id'];
	include 'new_edit.php';
	}


?>
			
