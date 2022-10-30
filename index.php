<?php
  session_start();
  require 'dbcon.php';
  if(!isset($_SESSION['username'])){
    header('location:login.php');
  }

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
  <body>

    <div class="containter mt-4">
      <?php include('message.php'); ?>


      <!-- Main car table -->
      <div  class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="text-center heada hd">Welcome <?php echo $_SESSION['username']; ?>  
              <a href="car-create.php" class="btn btn-info btn-sm">Add a car</a>
              <a href="car-search.php" class="btn btn-success btn-sm">Search for a car</a> <!-- #btn-success makes the colour of the button green -->
              <a href="home.php" class="btn btn-danger btn-sm">BACK</a>
              <a href="logout.php" button type="submit" class="btn btn-danger float-end">Logout</a> <!-- #btn-danger makes the colour of the button red -->
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
                  
                  <?php

                    $query = "SELECT * FROM cars";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) >0)
                    {
                      foreach($query_run as $car)
                      {
                        ?>
                        <tr>
                          <td><?= $car['id']; ?> </td>   <!-- Filling out the table with all the details of the cars -->
                          <td><?= $car['image'];?> </td>
                          <td><?= $car['make']; ?> </td>
                          <td><?= $car['model']; ?> </td>
                          <td><?= $car['year']; ?> </td>
                          <td><?= $car['price']; ?> </td>
                          <td>
                              <a href="car-view.php?id=<?= $car['id']; ?>" class="btn btn-info btn-sm">View</a>
                              <a href="car-edit.php?id=<?= $car['id']; ?>" class="btn btn-success btn-sm">Edit</a> <!-- #btn-success makes the colour of the button green -->
                              <form action="code.php" method="POST" class="d-inline">  <!-- The function of the buttons is code.php -->
                                <button type="submit" name="delete_car" value="<?= $car['id']; ?>" class="btn btn-danger btn-sm">Delete</a> <!-- #btn-danger makes the colour of the button red -->

                              </form>
                          </td>
                        </tr>
                        <?php
                      }
                    }
                    else
                    {
                      echo "<h5> No record found </h5>";
                    }
                  ?>
  

                </tbody>
              </table>
        
            </div>
          </div>
        </div>
      </div>
    </div>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
