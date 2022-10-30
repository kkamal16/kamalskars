<?php
  session_start();
  require 'dbcon.php';

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>



<div class="row"> 
    <div class="col-md-12">
    <h4> Search for a car model </h4>
    <a href="index.php" class="btn btn-danger float-end">BACK</a>

    </div>
</div>

<!-- Search function -->
<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">


</form>

</html>



<!-- search function -->
<?php

$con = new PDO("mysql:host=localhost;dbname=kamals_kars",'root','root');

if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `cars` WHERE make = '$str'");    

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();

    if($row = $sth->fetch())
    {
        ?>

        <!-- Main car table -->
        <div  class="row">
                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="text-center heada hd">Car details
                        <a href="car-create.php" class="btn btn-primary float-end">Add cars</a>
                        <a href="car-search.php" class="btn btn-primary float-end">Search for a car</a>

                    </h4>
                    </div>
                    <div class="card-body">

                    <table class="table table-boardered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->image; ?></td>
                            <td><?php echo $row->make; ?></td>
                            <td><?php echo $row->model; ?></td>
                            <td><?php echo $row->year; ?></td>
                            <td><?php echo $row->price; ?></td>
                            <td><a href="car-view.php?id=<?= $car['id']; ?>" class="btn btn-info btn-sm">View</a>
                                <a href="car-edit.php?id=<?= $car['id']; ?>" class="btn btn-success btn-sm">Edit</a> <!-- #btn-success makes the colour of the button green -->
                                <form action="code.php" method="POST" class="d-inline">
                                    <button type="submit" name="delete_car" value="<?= $car['id']; ?>" class="btn btn-danger btn-sm">Delete</a> <!-- #btn-danger makes the colour of the button red -->

                                </form>
                            </td>
                            </tr>


                        </tbody>
                    </table>
                
                    </div>
                </div>
                </div>
            </div>
            </div>


<?php
    }


    else{
    echo "Car does not exist";
    }


}

?>

