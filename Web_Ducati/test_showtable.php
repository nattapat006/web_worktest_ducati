<?php 
	/*ini_set('display_errors', 1)
	error_reporting(~0);*/

	include("test_connect.php");

	$strid = null;

	if(isset($_GET["id"]))
	{
		$strid = $_GET["id"];
	}

	$sql = "SELECT * FROM mb_data WHERE id = '".$strid."'";

	$query = mysqli_query($conn, $sql);

	$result = mysqli_fetch_array($query,MYSQLI_ASSOC);


 ?>
 <form action="test_editsave.php" name="from_add" method="post">
 	<table width="284" border="1">
 		<tr>
 			<th width="120"></th>
 			<td width="238"><input type="hidden" name="id" value="<?php echo $result["id"];?>"></td>
 			<tr>
			    <th width="120">Username</th>
			    <td><input type="text" name="username" size="20" value="<?php echo $result["UserName"];?>"></td>
			</tr>

		    <tr>
				    <th width="120">Username</th>
			    <td><input type="text" name="password" size="20" value="<?php echo $result["Password"];?>"></td>
			</tr>

			<tr>
				    <th width="120">Name</th>
			    <td><input type="text" name="name" size="20" value="<?php echo $result["name"];?>"></td>
			</tr>

			<tr>
				    <th width="120">Sex</th>
			    <td><input type="text" name="sex" size="20" value="<?php echo $result["sex"];?>"></td>
			</tr>

			<tr>
				    <th width="120">เลขบัตรประชาชน 13 หลัก</th>
			    <td><input type="text" name="ID_Card" size="20" value="<?php echo $result["id_card"];?>"></td>
			</tr>

			<tr>
				    <th width="120">เบอร์โทรศัพท์</th>
			    <td><input type="text" name="telephone" size="20" value="<?php echo $result["Telephone"];?>"></td>
			</tr>

			<tr>
				    <th width="120">E-mail</th>
			    <td><input type="text" name="Email" size="20" value="<?php echo $result["Email"];?>"></td>
			</tr>

			<tr>
				<th width="120">Type</th>
			</tr>
			<td>
			<select  class="form-control" name="txttype" >
				<option value="<?php echo $result["type"];?>"><?php if($result["type"]==1){ echo "user1"; }else if($result["type"]==2){ echo "user2"; }else{ echo "admin"; }?></option>
				<option value="1">- user1 -</option>
				<option value="2">- user2 -</option>
				<option value="3">- admin -</option>
			</select>
			</td>
 		</tr>
 	</table>
 	<input type="submit" name="submit" value="submit">
 </form>