
		<?php
			ini_set('display_errors', 1);
			error_reporting(~0);
			
			$sql= "SELECT * FROM mb_location";
			
			$query = mysqli_query($conn,$sql);

		?>

			<table width="1080" align="center" border="0">
				<tr>
					<td>
						<br><br><br>
						<Center><h1>ที่อยู่</h1></Center>
						<hr class="ds2">
					</td>
				</tr>
			</table>

			<table width="1024" align="center" border="1">
				  <tr>
				    <th width="15"> <div align="center">id</div></th>
				    <th width="100"> <div align="center">บ้านเลขที่</div></th>
				    <th width="150"> <div align="center">หมู่ที่</div></th>
				    <th width="200"> <div align="center">ชื่อหมู่บ้าน</div></th>
				    <th width="80"> <div align="center">ถนน</div></th>
				    <th width="500"> <div align="center">ตำบล</div></th>
					<th width="150"> <div align="center">อำเภอ</div></th>
					<th width="150"> <div align="center">จังหวัด</div></th>
					<th width="50"> <div align="center">รหัสไปรษณีย์</div></th>
					<br>
				  </tr>
				  
				<?php
				while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
				{
				?>
				  <tr>
				    <td><div align="center"><?php echo $result["id"];?></div></td>
				    <td align="center"><?php echo $result["house_no"];?></td>
				    <td align="center"><?php echo $result["village_no"];?></td>
				    <td><div align="center"><?php echo $result["village"];?></div></td>
				    <td align="center"><?php echo $result["road"];?></td>
				    <td align="center"><?php echo $result["sub_district"];?></td>
					<td align="center"><?php echo $result["district"];?></td>
					<td align="center"><?php echo $result["province"];?></td>
					<td align="center"><?php echo $result["postal_code"];?></td>
				  </tr>
				  
					<?php
					}
					?>
			</table>




