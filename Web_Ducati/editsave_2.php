<?php
	include("test_connect.php");

		$sql2 = "SELECT * FROM mb_location where id = ".$_GET['id'];

		mysqli_set_charset($conn,'UTF8');

		$query2 = mysqli_query($conn,$sql2);

	    $result2 = mysqli_fetch_array($query2,MYSQLI_ASSOC);

  ?>
    <form action="show_edit2.php" name="from_add" method="post">
	 		<table width="284" border="1">
			 		<tr>
				 		<th width="120">รหัส</th>
				 		<td width="238"><input type="hidden" name="id2" value="<?php echo $result2["id"];?>"></td>
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
				 		<td width="238"><input type="text" name="district " value="<?php echo $result2["district "];?>"></td>
			 		</tr><tr>
				 		<th width="120">จังหวัด</th>
				 		<td width="238"><input type="text" name="province" value="<?php echo $result2["province"];?>"></td>
			 		</tr><tr>
				 		<th width="120">รหัสไปรษณีย์</th>
				 		<td width="238"><input type="text" name="postal_code" value="<?php echo $result2["postal_code"];?>"></td>
	 		</table>
    </form>