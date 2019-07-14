 <?php include("test_connect.php"); ?>
		
		<?php
			ini_set('display_errors', 1);
			error_reporting(~0);

			$sql1 = "SELECT * FROM mb_data";
			
			mysqli_set_charset($conn,'UTF8');

			$query1 = mysqli_query($conn,$sql1);

		?>
			<table width="1024" align="center" border="1">
				<br>
						<tr>
				    <th width="15"> <div align="center">id</div></th>
				    <th width="100"> <div align="center">Username</div></th>
				    <th width="150"> <div align="center">Password</div></th>
				    <th width="200"> <div align="center">ชื่อ-สกุล</div></th>
				    <th width="80"> <div align="center">เพศ </div></th>
				    <th width="500"> <div align="center">เลขบัตรประชาชน 13 หลัก</div></th>
					<th width="150"> <div align="center">เบอร์โทรศัพท์</div></th>
					<th width="150"> <div align="center">E-mail</div></th>
					<th width="50"> <div align="center">Edit </div></th>
					<th width="50"> <div align="center">Delete </div></th>

				  </tr>

				  <?php
					while($result1=mysqli_fetch_array($query1,MYSQLI_ASSOC))
					{
				   ?>
					  <tr>
					    <td><div align="center"><?php echo $result1["id"];?></div></td>
					    <td align="center"><?php echo $result1["username"];?></td>
					    <td align="center"><?php echo $result1["password"];?></td>
					    <td><div align="center"><?php echo $result1["name"];?></div></td>
					    <td align="right"><?php echo $result1["sex"];?></td>
					    <td align="right"><?php echo $result1["ID_Card"];?></td>
						<td align="right"><?php echo $result1["telephone"];?></td>
						<td align="right"><?php echo $result1["Email"];?></td>
						<td align="center"><a href="editsave.php?id=<?php echo $result1['id'];?>">Edit</a></td>
						<td align="center"><a href="del_data.php?id=<?php echo $result1['id'];?>">Delete</a></td>

					  </tr>

					  <?php 
					}
					   ?>
			</table>

		




