<?php

session_start();
header('location:index.php');


$con = mysqli_connect("localhost","root","root","kamals_kars");  #connection to the database


mysqli_select_db($con, 'kamals_kars');

$name = $_POST['user'];
$password = $_POST['password'];

$s = "select * from usertable where name = '$name'";     

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num ==1){
    echo"Username already taken";

}
else{
    $reg= " insert into usertable(name , password) values ('$name' , '$password')";   #inserting the input into the database
    mysqli_query($con, $reg);
    echo" registration successful";
}

?>


<!-- Registering the user into the database -->