<?php
	
session_start();



$con = mysqli_connect('localhost', 'root', 'root');

mysqli_select_db($con, 'admin');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from admin_details where user = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
	$_SESSION['user'] = $name;
	header('location:index.php');
}else{
	header('location:login.php');
}	
	
?>	

