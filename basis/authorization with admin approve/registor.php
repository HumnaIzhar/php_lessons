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
            <h3 class="bg-info form-control" style="color:white;">Registor Here</h3>
        </center>
        <form action="insert.php" method="Post" enctype="multipart/form-data">
        <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Hospital Name</label>
        <div class="col-sm-10">
        <input name="hos_name" type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Hospital name ">
        </div>
        </div>
        <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Hospital Country</label>
        <div class="col-sm-10">
        <input name="hos_coun" type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Hospital Country ">
        </div>
        </div>
        <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Hospital City</label>
        <div class="col-sm-10">
        <input name="hos_city" type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Hospital City">
        </div>
        </div>
        <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Hospital Email</label>
        <div class="col-sm-10">
        <input name="hos_email" type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Hospital Email ">
        </div>
        </div>
        <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Hospital Password</label>
        <div class="col-sm-10">
        <input name="hos_pass" type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Hospital Password ">
        </div>
        </div>
        <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Hospital Spoke Person Name</label>
        <div class="col-sm-10">
        <input name="hos_spname" type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Hospital Spoke Person name ">
        </div>
        </div>
        <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Role ID</label>
        <div class="col-sm-10">
        <input name="role_id" type="text" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your ID ">
        </div>
        </div>
        <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Hospital Image</label>
        <div class="col-sm-10">
        <input name="hos_img" type="file" >
        </div>
        </div>
        <button type="submit" class="btn btn-success">Registor Hospital</button>
        <a href="login.php">Already Registored Login Here</a>
        </form>
        
        
    </div>






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
