<!DOCTYPE html>
<html>

	<head>
		<title>Ducati</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

		<style >
				hr.ds1{

					border: 5px solid green;
  					border-radius: 5px;
  				}
  				hr.ds2{

					border: 5px solid green;
  					border-radius: 5px;
  				}
  				hr.ds3{

					border: 5px solid green;
  					border-radius: 5px;
  				}
		</style>

	</head>

	<body>
		
		<table border="0" width="100%" align="center" bgcolor="#F5F5F5">
			<tr>
				<td>
					<div class="w3-sidebar w3-bar-block w3-dark-grey" style="display:none" id="mySidebar">
					<button class="w3-bar-item w3-button w3-large"
					onclick="w3_close()">Close &times;</button>
					<a href="index.php" class="w3-bar-item w3-button">Ducati</a>
					<a href="ex1.php" class="w3-bar-item w3-button">New Model</a>
					<a href="#" class="w3-bar-item w3-button">Top sport</a>
					<a href="#" class="w3-bar-item w3-button">Manager</a>
					<a href="sing_in.php" class="w3-bar-item w3-button">sing in</a>
					<a href="sing_up.php" class="w3-bar-item w3-button">Register</a>
					<a href="test_show.php" class="w3-bar-item w3-button">db_member</a>
					</div>

<div>
  <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1> </h1>
    </div>
</div>



<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
				</td>
			</tr>
		</table>
		
	</body>

</html>