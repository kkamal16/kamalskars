<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_car']))
{
    $car_id = mysqli_real_escape_string($con, $_POST['delete_car']);

    $query = "DELETE FROM cars WHERE id='$car_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "car Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "car Not Deleted";
        header("Location: index.php");
        exit(0);
    }    

}



if(isset($_POST['update_car']))   #if update student gets clicked then this happens
{
    $car_id = mysqli_real_escape_string($con, $_POST['car_id']);

    $make = mysqli_real_escape_string($con, $_POST['make']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $image = mysqli_real_escape_string($con, $_POST['image']);
        


    $query = "UPDATE cars SET make='$make', model='$model', year='$year', price='$price', image='$image'
                WHERE id='$car_id' ";


    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "car Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "car Not updated";
        header("Location: index.php");
        exit(0);
    }
}



 


if(isset($_POST['save_car']))
{
    $make = mysqli_real_escape_string($con, $_POST['make']);
    $model = mysqli_real_escape_string($con, $_POST['model']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $image = mysqli_real_escape_string($con, $_POST['image']);

    $query = "INSERT INTO cars (make, model, year, price, image) VALUES
        ('$make', '$model', '$year', '$price', '$image')";

    $query_run = mysqli_query($con, $query);  
    if($query_run)
    {
        $_SESSION['message'] = "student Created Successfully";
        header("Location: index.php");
        exit(0);

    }
    else
    {
        $_SESSION['message'] = "student not created";
        header("Location: car-create.php");
        exit(0);
    }


}

?>



