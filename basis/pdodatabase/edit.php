<?php
 error_reporting(0);
 include('include/config.php');
 $name = $_POST['name'];
 $age = $_POST['age'];
 
  $id = $_GET['id'];
  $q  = mysqli_query($conn,"select * from users where id=$id;");
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
<div class="jumbotron">
<center><h1 style="font-size:69px; color:Yellow" class="display-4">PDO DATABASE</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p></center>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>


<div class="container card card-body" style="width:70%; background-color:lightblue;">
<center><h1>Edit Data</h1></center>
    <form action="update.php" method="post">
    <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Id</label>
    <div class="col-sm-10">
    <input type="number" value="<?= $row['id'] ?>"  class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Id " name="id">
    </div>
    </div>
    <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Name</label>
    <div class="col-sm-10">
    <input type="text" value="<?= $row['name'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Name " name="name">
    </div>
    </div>
    <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Age</label>
    <div class="col-sm-10">
    <input type="number" value="<?= $row['age']?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your age " name="age">
    </div>
    </div>    <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Address</label>
    <div class="col-sm-10">
    <input type="text" value="<?= $row['address'] ?>" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Address " name="address">
    </div>
    </div>
   
    <br>
    <button type="submit" class="btn btn-success" name="savedata">Edit</button>
    
    
    
    </form>
    
    
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
