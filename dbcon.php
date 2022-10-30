<?php

$con = mysqli_connect("localhost","root","root","kamals_kars");  #connection to the database

if(!$con){
    die('Connection failed'. mysqli_connect_error());   #outcome if connection fails
}

?>