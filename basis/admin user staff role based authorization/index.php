<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<title>Hello, world!</title>
</head>
<body>


<?php
require_once('include/config.php');
session_start();
if ((isset($_SESSION['uname'])) && (($_SESSION['role']==1) || ($_SESSION['role']==2) )&& ($_SESSION['islogin'] == true)){
       ?>
       <form class="container card card-body mt-5" style="width:70%;"  action="addproduct.php" method="post" enctype="multipart/form-data">
<center>
    <h4 class="bg-warning text-white">Product Insert</h4>
</center>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Name</label>
<div class="col-sm-10">
<input type="text" name="name" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>

<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Description</label>
<div class="col-sm-10">
<input type="text" name="descri" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>

<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Price</label>
<div class="col-sm-10">
<input type="number" name="price" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>

<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Image</label>
<div class="col-sm-10">
<input type="file" name="img">
</div>
</div>
<center>
    <button type="submit" class="btn btn-secondary form-control"> Add Product</button>
</center>
</form>
     
       
       <?php
}
else{
    header("Location:show.php");
}
?>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>



