<?php include("test_header.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<table align="center" width="100%"  border="1">

<?php  
    ini_set('display_errors', 1);
	error_reporting(~0);

	$servername = "127.0.0.1";
    $username = "root";
    $password = "123456";
    $dbname = "dt_member";

	$conn = mysqli_connect($servername,$username,$userpassword,$dbname);

	/*$link = mysqli_connect("127.0.0.1", "root", "123465", "dt_member");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);*/


		$TBL_MYSQL ="SELECT * FROM  mb_data order by id asc" or die("Error:" . mysqli_error());

		$TBL_MYSQL_2 ="select * from mb_location order by id asc" or die("Error:" . mysqli_error());

		$query = mysql_query($conn, $TBL_MYSQL);
		$query2 = mysql_query($conn, $TBL_MYSQL_2);
?>
		<table border = '3' align = 'center' width = '1024'>";

		<center><h1>ข้อมูล</h1></center>
		<tr>
    <th width="15"> <div align="center">ID </div></th>
    <th width="100"> <div align="center">Username</div></th>
    <th width="150"> <div align="center">Password</div></th>
    <th width="200"> <div align="center">ชื่อ-สกุล</div></th>
    <th width="80"> <div align="center">เพศ </div></th>
    <th width="500"> <div align="center">เลขบัตรประชาชน 13 หลัก</div></th>
	<th width="150"> <div align="center">เบอร์โทรศัพท์</div></th>
	<th width="150"> <div align="center">E-mail</div></th>
	<th width="50"> <div align="center">Edit </div></th>
  </tr>

  <?php
	while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
   ?>
	  <tr>
	    <td><div align="center"><?php echo $result["id"];?></div></td>
	    <td><?php echo $result["username"];?></td>
	    <td><?php echo $result["password"];?></td>
	    <td><div align="center"><?php echo $result["name"];?></div></td>
	    <td align="right"><?php echo $result["sex"];?></td>
	    <td align="right"><?php echo $result["ID_Card"];?></td>
		<td align="right"><?php echo $result["telephone"];?></td>
		<td align="right"><?php echo $result["Email"];?></td>
		<td align="center"><a href="Update.php?id=<?php echo $result['id'];?>">Edit</a></td>
	  </tr>

	  <?php 
	}
	   ?>

<table width="650" align="center" border="3">
<Center><h1> Table2 SingUp</h1></Center>

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
	<th width="50"> <div align="center">Edit </div></th>
  </tr>
  
<?php
while($result=mysqli_fetch_array($query2,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["id"];?></div></td>
    <td><?php echo $result["house_no"];?></td>
    <td><?php echo $result["vilname_no"];?></td>
    <td><div align="center"><?php echo $result["vilname"];?></div></td>
    <td align="right"><?php echo $result["road"];?></td>
    <td align="right"><?php echo $result["sub_district"];?></td>
	<td align="right"><?php echo $result["district"];?></td>
	<td align="right"><?php echo $result["province"];?></td>
	<td align="right"><?php echo $result["postal_code"];?></td>
	<td align="center"><a href="Update.php?id=<?php echo $result["id"];?>">Edit</a></td>
  </tr>

<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>

</table>
 <?php include("footer.php"); ?>

