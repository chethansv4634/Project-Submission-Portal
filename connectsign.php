<?php
$name=$_POST['name'];
$password=$_POST['password'];

define('DB_HOST','localhost');
define('DB_NAME','WPPROJECT');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL : ".mysqli_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL : ".mysqli_error($con));
$query="INSERT INTO signup(id,username,password)VALUES(NULL,'$name','$password')";
$result=mysqli_query($con,$query);
if($result)
{
	header("location:stu_login1.php");
}
else
{
	die('Error:'.mysqli_error($con));
}
mysqli_close($con);
?>

