<?php
		include("test_header.php");

	include("test_connect.php");

		$sql1 = "SELECT * FROM mb_data where id = ".$_GET['id'];
		$sql2 = "SELECT * FROM mb_location where id = ".$_GET['id'];

		mysqli_set_charset($conn,'UTF8');

		$query1 = mysqli_query($conn,$sql1);
		$query2 = mysqli_query($conn,$sql2);
  
	    $result1 = mysqli_fetch_array($query1,MYSQLI_ASSOC);	
	    $result2 = mysqli_fetch_array($query2,MYSQLI_ASSOC);

  ?>
  <table  width="1080" border="0" align="center">
  	<tr>
  		<td>
  			<br><br><br><br>
  				<hr class="ds3">
		 		<h3 align="center">แก้ไขข้อมูล</h3>
		 		<hr class="ds2">
		 	</td>
  	</tr>
  </table>
    <form action="up_dt.php" name="from_add" method="post">
	 		<table width="400" border="0" align="center">
		 		<tr>
			 		<td width="238"><input type="hidden" name="id" value="<?php echo $result1["id"];?>"></td>
		 		</tr>
					
		 		<tr>
			 		<th width="120">Username</th>
			 		<td width="238" ><input type="text" name="username" value="<?php echo $result1["username"];?>"></td>
		 		</tr>
		 		<tr>
			 		<th width="120">Password</th>
			 		<td width="238"><input type="text" name="password" value="<?php echo $result1["password"];?>"></td>
		 		</tr>
		 		<tr>
			 		<th width="120">ชื่อ - นามสกุล</th>
			 		<td width="238"><input type="text" name="name" value="<?php echo $result1["name"];?>"></td>
		 		</tr>
		 
		 		<tr>
		 			<td align="center" colspan="2">
<p><input class="w3-radio" type="radio" name="sex" value="ชาย" <?php if($result1["sex"]=="ชาย"){ echo "checked"; } ?>>
						<label>ชาย</label></p>

<p><input class="w3-radio" type="radio" name="sex" value="หญิง" <?php if($result1["sex"]=="หญิง"){ echo "checked"; } ?>>
						<label>หญิง</label></p>
					</td>
				</tr>
		 
		 		<tr>
			 		<th width="500">เลขบัตรประชาชน 13 หลัก</th>
			 		<td width="238"><input type="text" name="ID_Card" value="<?php echo $result1["ID_Card"];?>"></td>
		 		</tr>
		 		<tr>
			 		<th width="120">เบอร์โทรศัพท์</th>
			 		<td width="238"><input type="text" name="telephone" value="<?php echo $result1["telephone"];?>"></td>
		 		</tr>
		 		<tr>
			 		<th width="120">E-mail</th>
			 		<td width="238"><input type="text" name="Email" value="<?php echo $result1["Email"];?>"></td>
		 		</tr>
		 		    
			 		
			 		<tr>
				 		<th width="120">บ้านเลขที่</th>
				 		<td width="238"><input type="text" name="house_no" value="<?php echo $result2["house_no"];?>"></td>
			 		</tr><tr>
				 		<th width="120">หมู่ที่</th>
				 		<td width="238"><input type="text" name="village_no" value="<?php echo $result2["village_no"];?>"></td>
			 		</tr><tr>
				 		<th width="120">หมู่บ้าน</th>
				 		<td width="238"><input type="text" name="village" value="<?php echo $result2["village"];?>"></td>
			 		</tr><tr>
				 		<th width="120">ถนน</th>
				 		<td width="238"><input type="text" name="road" value="<?php echo $result2["road"];?>"></td>
			 		</tr><tr>
				 		<th width="120">ตำบล</th>
				 		<td width="238"><input type="text" name="sub_district" value="<?php echo $result2["sub_district"];?>"></td>
			 		</tr><tr>
				 		<th width="120">อำเภอ</th>
				 		<td width="238"><input type="text" name="district" value="<?php echo $result2["district"];?>"></td>
			 		</tr><tr>
				 		<th width="120">จังหวัด</th>
				 		<td width="238"><input type="text" name="province" value="<?php echo $result2["province"];?>"></td>
			 		</tr><tr>
				 		<th width="120">รหัสไปรษณีย์</th>
				 		<td width="238"><input type="text" name="postal_code" value="<?php echo $result2["postal_code"];?>"></td>
					<tr>



			<style>
				input[type=submit] {
                width: 30%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
              }

              input[type=submit]:hover {
                background-color: #45a049;
              }
          </style>

		 			<td colspan="2" align="center" width="1080">
		 				<br>
		 				<input type="submit" name="submit" value="Save">
			 		</td>
			 	</tr>

	 		</table>
	 	<table align="center" width="1080"  border="0">
		<tr>
			<td>
				<hr class="ds2">
			</td>
		</tr>
		</table>

    </form>
    <?php include("footer.php");?>
    <?php 
    		/*	<tr>
			 		<th width="120">เพศ</th>
			 		<td width="238"><input type="text" name="sex" value="<?php echo $result1["sex"];?>"></td>
		 		</tr>*/
		 		 ?>