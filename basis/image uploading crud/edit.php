<?php
 error_reporting(0);
 include('include/config.php');
 $name = $_POST['name'];
 $username = $_POST['username'];
 $age = $_POST['age'];
 $address = $_POST['address'];
 $email = $_POST['email'];
 $file = $_POST['file'];
  $id = $_GET['id'];
  $q  = mysqli_query($conn,"select * from image where id=$id;");
  $row = mysqli_fetch_assoc($q);

?>

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
<div class="jumbotron" style="background-color: lightgrey;">
    <center>
    
  <h1 class="display-4" style="color: lightbrown; font-size:90px;">Upload Image</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  </center>
  
</div>
<div class="container card card-body" style="background-color:lightgrey;">
<center><h1>Edit Data</h1></center>
<form action="update.php" method="POST" enctype="multipart/form-data">
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Name</label>
<div class="col-sm-10">
<input name="name" type="text" value="<?= $row['id'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your id ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Name</label>
<div class="col-sm-10">
<input name="name" type="text" value="<?= $row['name'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Name ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Username</label>
<div class="col-sm-10">
<input name="username" type="text" value="<?= $row['username'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Username ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Age</label>
<div class="col-sm-10">
<input name="age" type="number" value="<?= $row['age'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Age ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Address</label>
<div class="col-sm-10">
<input name="address" type="text" value="<?= $row['address'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Address ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Email</label>
<div class="col-sm-10">
<input name="email" type="email" value="<?= $row['email'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Image</label>
<div class="col-sm-10">
<input type="file"  name="file"   >
</div>
</div>
<center><button type="submit" class="btn btn-success" name="savedata">Edit</button></center>
</form>
</div>






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>