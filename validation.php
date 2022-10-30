<?php

session_start();


$con = mysqli_connect("localhost","root","root","kamals_kars");  #connection to the database


mysqli_select_db($con, 'kamals_kars');

$name = $_POST['user'];
$password = $_POST['password'];

$s = "select * from usertable where name = '$name' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num ==1){       #making sure that the user exists when they are logging on.
    $_SESSION['username'] = $name;
    header('location:home.php');

}
else{    #if the user doesnt exist then it will take them back to the login page
    header('location:login.php');

    
}

?>