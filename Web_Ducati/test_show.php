 <?php include("test_header.php"); ?>
 <?php include("test_connect.php"); ?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<table align="center" width="1080"  border="0">
	<tr>
		<td>
			<br><br><br><br>
			<Center><h1> ข้อมูลสมาชิก </h1></Center>
			<hr class="ds2">
		</td>
	</tr>
	
		<?php
		    include("test_show1.php");
		?>
		<table align="center" width="1080"  border="0">
		<tr>
			<td>
				<hr class="ds2">
			</td>
		</tr>
		</table>
		<?php
		    include("test_show2.php");
		?>
		<table align="center" width="1080"  border="0">
		<tr>
			<td>
				<hr class="ds2">
			</td>
		</tr>
		</table>
	<?php
	mysqli_close($conn);
	?>
</table>
 <?php include("footer.php"); ?>