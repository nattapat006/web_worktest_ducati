
<?php
echo $_POST["UserName"]."<br>"; 
echo $_POST["Password"]."<br>"; 
echo "<hr>";

foreach($_POST as $key => $val) // All Key & Value
{
	echo $key . " : " . $val . "<br>";
}
?>
