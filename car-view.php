<?php
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

    <title>car Edit</title>
  </head>
  <body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center heada hd"> car View Details 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body"> 
                        
                        <?php
                        if(isset($_GET['id']))
                        {
                            $car_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM cars where id='$car_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $car = mysqli_fetch_array($query_run);
                                ?>

                                <div class="mb-3">
                                    <label>make</label>
                                    <p class="form-control">   <!-- using p tag because only viewing data and no input --> 
                                        <?=$car['make'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>model</label>
                                    <p class="form-control">
                                        <?=$car['model'];?>
                                    </p>

                                </div>
                                <div class="mb-3">
                                    <label>year</label>
                                    <p class="form-control">
                                        <?=$car['year'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>price</label>
                                    <p class="form-control">
                                        <?=$car['price'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Image</label>
                                    <p class="form-control">
                                        <?=$car['image'];?>
                                    </p>
                                </div>


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