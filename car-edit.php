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

    <title>Student Edit</title>
  </head>
  <body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center heada hd"> car Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body"> 
                        
                        <?php
                        if(isset($_GET['id']))
                        {
                            $car_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM cars WHERE id='$car_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $car = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">    <!-- using code.php to send and update data to the database -->
                                    <input type="hidden" name="car_id" value="<?= $car['id']; ?>">

                                <div class="mb-3">
                                    <label>make</label>
                                    <input type="text" name="make" value="<?=$car['make'];?>" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>model</label>
                                    <input type="text" name="model" value="<?=$car['model'];?>" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>year</label>
                                    <input type="text" name="year" value="<?=$car['year'];?>" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>price</label>
                                    <input type="text" name="price" value="<?=$car['price'];?>" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Image</label>
                                    <input type="file" name="image" value="<?=$car['image'];?>" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_car" class="btn btn-primary">
                                        Update car
                                    </buttton>   <!-- using this button to edit data into the database -->
                                </div>

                                </form>

                                <?php
                            }
                            else
                            {
                               echo "<h4>No ID found</h4>";
                            }
                        }
                        ?>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
    

   


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>