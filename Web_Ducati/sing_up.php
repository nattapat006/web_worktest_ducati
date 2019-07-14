<?php include("test_header.php"); ?>

<title>Ducati</title>

<table align="center" width="1024" border="0" bgcolor="#F5F5F5">
	<tr>
		<td>
<br><br><br><br><br>
		<center><img src="/image/ducati_logo.png" alt="Boat" class="w3-animate-opacity" style="width:15%;min-height:80px;max-height:160px;">

		<div class="w3-container">
		  <font face="Impact" size="16">Welcom to Ducati complepe</font>
		  <p></p>
		  

		<div class="w3-container"> 



		<form action="sing_table.php" method="post" name="form1">




		<p><label>UserName</label></p>
		<input class="w3-input" type="text" name="username" style="width:90%" required>


		<p><label>Password</label></p>
		<input class="w3-input" type="Password" name="password" style="width:90%" required>


		<p><label>ชื่อ - นามสกุล</label></p>
		<input class="w3-input" type="text" name="name" style="width:90%" required>


		<p><input class="w3-radio" type="radio" name="sex" value="ชาย" checked>
		<label>ชาย</label></p>

		<p><input class="w3-radio" type="radio" name="sex" value="หญิง">
		<label>หญิง</label></p>

		<p><label>เลขบัตรประชาชน 13 หลัก</label></p>
		<input class="w3-input" type="text" name="ID_Card" style="width:90%" required maxlength="13"> 


		<p><label>เบอร์โทรศัพท์</label></p>
		<input class="w3-input" type="text" name="telephone" style="width:90%" required maxlength="10">

		<p><label>E-mail</label></p>
		<input class="w3-input" type="text" name="Email" style="width:90%" required>




		<p><label>บ้านเลขที่</label></p>
		<input class="w3-input" type="text" name="house_no" style="width:90%" required>

		<p><label>หมู่ที่</label></p>
		<input class="w3-input" type="text" name="village_no" style="width:90%" required>

		<p><label>ชื่อหมู่บ้าน</label></p>
		<input class="w3-input" type="text" name="village" style="width:90%" required>

		<p><label>ถนน</label></p>
		<input class="w3-input" type="text" name="road" style="width:90%" required>

		<p><label>ตำบล / แขวง</label></p>
		<input class="w3-input" type="text" name="sub_district" style="width:90%" required>

		<p><label>อำเภอ / เขต</label></p>
		<input class="w3-input" type="text" name="district" style="width:90%" required>

		<p><label>จังหวัด</label></p>
		<input class="w3-input" type="text" name="province" style="width:90%" required>

		<p><label>รหัสไปรษณีย์</label></p>
		<input class="w3-input" type="text" name="postal_code" style="width:90%" required maxlength="5">

		<p><button class="w3-btn w3-ripple w3-hover-green" type="submit">Register</button></p>
		</div>
		</form>
		</td>
	</tr>
</table>
 <?php include("footer.php"); ?>


