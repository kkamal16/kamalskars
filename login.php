<?php include('includes/header.php');
	$page_title="Welcome to Kamals Kars"
?>

<h2 class="text-center heada hd">Admin login  </h2>

<!-- start of container -->
<div class="container">
	<div class="row">
    	<div class="col-sm-1">
        content goes here 
        </div>
        <div class="col-sm-10">
        <h2>Log in</h2>
        <form class="row g-3">
  <div class="col-md-6">
    <label for="inputemail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputemail">
  </div>
  <div class="col-md-6">
    <label for="inputpassword" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputpassword">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Log in</button>
  </div>
    </form>
        </div>
        <div class="col-sm-1">
        content goes here
   `	</div>
   </div>
</div>

<?php
include('includes/footer.php');
?>