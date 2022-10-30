<?php
session_start();
session_destroy();

header('location:login.php');

?>

<!--Logging out the user from the session by using session_destroy  -->