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
    <form class="container card card-body mt-5" style="width:70%" action="login_handle.php" method="post">
        <center>
        <h4 class="bg-warning text-white">Login here</h4>
        </center>
    <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Username</label>
    <div class="col-sm-10">
    <input type="text" name="uname" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Username ">
    </div>
    </div>
    <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Password</label>
    <div class="col-sm-10">
    <input type="text" name="pass" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Username ">
    </div>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="role" id="exampleRadios1" value="1" checked>
    <label class="form-check-label" for="exampleRadios1">
    Admin
    </label>
    </div>
   <div class="form-check">
   <input class="form-check-input" type="radio" name="role" id="exampleRadios2" value="2">
   <label class="form-check-label" for="exampleRadios2">
   Staff
   </label>
   </div>

   <div class="form-check">
  <input class="form-check-input" type="radio" name="role" id="exampleRadios2" value="3">
  <label class="form-check-label" for="exampleRadios2">
   User
  </label>
  </div>
  <center>
    <button type="submit" class="btn btn-secondary form-control"> Login Here</button>
    <a href="registor.php" class="text-success">New here register here......</a>
  </center> 
    </form>
    
    






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>