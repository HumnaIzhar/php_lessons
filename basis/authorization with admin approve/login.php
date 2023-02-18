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
<div class="container card card-body mt-5" style="width:70%">
<center>
    <h3 class="bg-warning form-control">Login Here</h3>
</center>
<form action="loginhandle.php" method="Post">
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Hospital Name</label>
<div class="col-sm-10">
<input type="text" name="hos_name" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your hospital name ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Hospital Spoke Person Name</label>
<div class="col-sm-10">
<input type="text" name="hos_spname" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your spoke person name ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Hospital Email</label>
<div class="col-sm-10">
<input type="text" name="hos_email" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email  ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Hospital Password</label>
<div class="col-sm-10">
<input type="text" name="hos_pass" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Password ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Hospital Name</label>
<div class="col-sm-10">
<input type="text" name="hos_name" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>
<button type="submit" class="btn btn-success form-control">Login</button>
<a href="registor.php">Not a user registor here...</a>


</form>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>