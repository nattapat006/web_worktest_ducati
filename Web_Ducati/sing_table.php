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

						$sql = "INSERT INTO mb_data (username, password, name, sex, ID_Card, telephone, Email)
						VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["name"]."','".$_POST["sex"]."','".$_POST["ID_Card"]."', '".$_POST["telephone"]."','".$_POST["Email"]."')";
				// echo $sql; exit();
					$query = mysqli_query($conn,$sql);

						$sql2 = "INSERT INTO mb_location (house_no,village_no,village,road,sub_district,district ,province,postal_code)
						VALUES ('".$_POST["house_no"]."','".$_POST["village_no"]."','".$_POST["village"]."','".$_POST["road"]."','".$_POST["sub_district"]."','".$_POST["district"]."','".$_POST["province"]."','".$_POST["postal_code"]."')";
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
