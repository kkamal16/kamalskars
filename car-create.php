<?php
session_start();
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

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> car Add 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">  
                        <form action="code.php" method="POST">    <!-- using code.php to send data to the database -->

                            <div class="mb-3">
                                <label>make</label>
                                <input type="text" name="make" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>model</label>
                                <input type="text" name="model" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>year</label>
                                <input type="text" name="year" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>price</label>
                                <input type="text" name="price" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Upload image </label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_car" class="btn btn-primary">Save car</buttton>   <!-- using this button to submit data into the databse -->
                            </div>
                        
                        </form> 
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
    



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

