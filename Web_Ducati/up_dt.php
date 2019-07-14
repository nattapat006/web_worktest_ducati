<?php include("test_header.php");?>

<table align="center" width="1080">
	<tr>
		<td>
			<br><br><br><br>
		<h3>ข้อมูลของท่าน</h3><hr class="ds3">
		</td>	
	</tr>
</table>
<table align="center" width="100%">
	<tr>
		<td align="center">
			
	<?php

					foreach($_POST as $key => $val) // All Key & Value
				{
					echo $key . " : " . $val . "<br>";
				}
						 
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
				 //echo $sql; exit();

						/*if ($conn->query($sql) === TRUE) {
						    echo "New record created successfully";
						} else {
						    echo "Error: " . $sql . "<br>" . $conn->error;
						}*/
					


		/*$sql3 = "SELECT * FROM mb_data order by id desc limit 1";
		$query3 = mysqli_query($conn,$sql3);
		$result3 = mysqli_fetch_array($query3,MYSQLI_ASSOC);*/

						$conn->close();
	?>

		</td>
		</tr>
</table>
<table align="center" width="1080">
		<tr align="center">
			<td align="center">
				<h4>
					<hr class="ds2">
					<a class="w3-btn w3-ripple w3-hover-green" href =test_show.php>ไปหน้าตาราง</a>
					<hr class="ds2">
				</h4>
			</td>
		</tr>
</table>
<?php include("footer.php"); ?>?>
<?php /*<form action="editsave.php" name="from_add" method="get">
					<input type="hidden" name="id" value="<?php echo $result3["id"];?>">
					<input type="submit" name="submit" value="submit">
				</form> ?>*/
