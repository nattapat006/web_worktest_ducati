<?php
	include("test_header.php");
  ?>
  <table width="1024" align="center">
  	<tr>
  		<td align="center" width="612">
			<?php 
					include("test_connect.php");
			$sql2 = "UPDATE mb_location SET 
			house_no = '".$_POST["House_no"]."' ,
			village_no = '".$_POST["village_no"]."' ,
			village = '".$_POST["village"]."' ,
			road = '".$_POST["road"]."',
			sub_district = '".$_POST["sub_district"]."',
			district = '".$_POST["district"]."',
			province = '".$_POST["province"]."',
			postal_code = '".$_POST["postal_code"]."',
			WHERE id = '".$_POST["id"]."' ";
			 ?>
		<p><button class="w3-btn w3-ripple w3-hover-green" type="submit" href="show_edit.php"><-- ย้อนกลับ></button></p>
		<p><button class="w3-btn w3-ripple w3-hover-green" type="submit" href=".php">Save></button></p>
		
 		</td>
 	</tr>
 </table>

 <?php
	include("footer.php");
  ?>