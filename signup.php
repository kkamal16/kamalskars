<?php include('includes/header.php');
	$page_title="Welcome to Kamals Kars"
?>

<h2 class="text-center heada hd">Kamals Kars</h2>

<!-- start of container -->
<div class="container">
	<div class="row">
    	<div class="col-sm-2">
        content goes here
        </div>
        <div class="col-sm-8">
        <h2 class="text-center heada hd">Sign up</h2>
        Sign up to add cars to your watchlist, book test drives or hire them
        <form class="row g-3">
  <div class="col-md-6">
    <label for="inputfirstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="inputfirstname">
  </div>
  <div class="col-md-6">
    <label for="inputlastname" class="form-label">Last name</label>
    <input type="password" class="form-control" id="inputlastname">
  </div>
  <div class="col-md-6">
    <label for="inputemail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputemail" placeholder="example@gmail.com">
  </div>
  <div class="col-md-6">
    <label for="inputpassword" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputpassword">
  </div>
  <div class="col-md-6">
    <label for="inputphonenumber" class="form-label">Phone number</label>
    <input type="text" class="form-control" id="inputphonenumber" placeholder="123 456 7890">
  </div>
  <div class="col-md-6">
    <label for="inputlicense number" class="form-label">License number</label>
    <input type="text" class="form-control" id="inputlicensenumber" placeholder="AB123456">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign up</button>
  </div>
    </form>
        <div class="col-sm-2">
   `	</div>
   </div>
</div>

<?php
include('includes/footer.php');
?>