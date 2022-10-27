<?php
	
session_start();
header('location:login.php');


$con = mysqli_connect('localhost', 'root', 'root');

mysqli_select_db($con, 'admin');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from admin_details where user = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
	echo" Username Already Taken";
}else{
	$reg = " insert into admin_details(user, password) values ('$name', '$pass')";
	mysqli_query($con, $reg);
	echo" Registration Successful";
}	
	
?>	




