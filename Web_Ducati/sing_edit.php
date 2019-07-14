//edit in page sing_table.
<?php include("test_header.php"); ?>
<?php include("test_connect.php"); ?>
<title>Ducati</title>

<table align="center" width="1024" border="0" bgcolor="#F5F5F5">
	<tr>
		<td>

		<center><img src="/image/ducati_logo.png" alt="Boat" class="w3-animate-opacity" style="width:15%;min-height:80px;max-height:160px;">

		<div class="w3-container">
		  <font face="Impact" size="16">Welcom to Ducati complepe</font>
		  <p></p>
		  

		<div class="w3-container"> 

		<?php
			$sql1 = "SELECT * FROM mb_data where id = ".$_GET['id'];
			$sql2 = "SELECT * FROM mb_location where id = ".$_GET['id'];

			
			$query1 = mysqli_query($conn,$sql1);
			$query2 = mysqli_query($conn,$sql2);
	  
		    $result1 = mysqli_fetch_array($query1,MYSQLI_ASSOC);	
		    $result2 = mysqli_fetch_array($query2,MYSQLI_ASSOC);
		?>
		<form action="sing_table.php" method="post" name="form1">



		<p><label>UserName</label></p>
		<input class="w3-input" type="text" name="UserName" style="width:90%" required 
		value="<?php echo $result1["username"] ?>">


		<p><label>Password</label></p>
		<input class="w3-input" type="Password" name="Password" style="width:90%" required 
		value="<?php echo $result1["password"] ?>">


		<p><label>ชื่อ - นามสกุล</label></p>
		<input class="w3-input" type="text" name="name" style="width:90%" required 
		value="<?php echo $result1["name"] ?>">


		<p><input class="w3-radio" type="radio" name="sex" value="ชาย" checked>
		<label>ชาย</label></p>

		<p><input class="w3-radio" type="radio" name="sex" value="หญิง" value="<?php echo $result1["sex"] ?>">
		<label>หญิง</label></p>

		<p><label>เลขบัตรประชาชน 13 หลัก</label></p>
		<input class="w3-input" type="text" name="id_card" style="width:90%" required maxlength="13" 
		value="<?php echo $result1["ID_Card"] ?>"> 


		<p><label>เบอร์โทรศัพท์</label></p>
		<input class="w3-input" type="text" name="Telephone" style="width:90%" required maxlength="10" 
		value="<?php echo $result1["telephone"] ?>">

		<p><label>E-mail</label></p>
		<input class="w3-input" type="text" name="Email" style="width:90%" required 
		value="<?php echo $result1["Email"] ?>">



		<p><label>บ้านเลขที่</label></p>
		<input class="w3-input" type="text" name="House_no" style="width:90%" required
		 value="<?php echo $result2["house_no"] ?>"> 

		<p><label>หมู่ที่</label></p>
		<input class="w3-input" type="text" name="village_no" style="width:90%" required 
		value="<?php echo $result2["village_no"] ?>">

		<p><label>ชื่อหมู่บ้าน</label></p>
		<input class="w3-input" type="text" name="village" style="width:90%" required 
		value="<?php echo $result2["village"] ?>">

		<p><label>ถนน</label></p>
		<input class="w3-input" type="text" name="rord" style="width:90%" required 
		value="<?php echo $result2["road"] ?>">

		<p><label>ตำบล / แขวง</label></p>
		<input class="w3-input" type="text" name="sub_district" style="width:90%" required 
		value="<?php echo $result2["sub_district"] ?>">

		<p><label>อำเภอ / เขต</label></p>
		<input class="w3-input" type="text" name="district" style="width:90%" required 
		value="<?php echo $result2["district"] ?>">

		<p><label>จังหวัด</label></p>
		<input class="w3-input" type="text" name="province" style="width:90%" required 
		value="<?php echo $result2["province"] ?>">

		<p><label>รหัสไปรษณีย์</label></p>
		<input class="w3-input" type="text" name="postal_code" style="width:90%" required maxlength="5" 
		value="<?php echo $result2["postal_code"] ?>">

		<p><button class="w3-btn w3-ripple w3-hover-green" type="submit">Save</button></p>
		</div>
		</form>
		</td>
	</tr>
</table>
 <?php include("footer.php"); ?>



