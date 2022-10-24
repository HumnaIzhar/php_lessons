<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Something else here</a>
    </div>
    </li>
    <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
    </nav>
    <br><br><br>

    <div class="container card card-body" style="width:40em">
     <center>
        <h2>Salary Calculator</h2>
     </center>
        <form action="07.extend.php" method="post">
        <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Salary</label>
        <div class="col-sm-10">
        <input type="text" name="salary" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Salary ">
        </div>
        </div>
        <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Presents</label>
        <div class="col-sm-10">
        <input type="text" name="presents" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Presents ">
        </div>
        </div>
        <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Absent</label>
        <div class="col-sm-10">
        <input type="text" name="absents"class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Absents ">
        </div>
        </div>
        <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Lates</label>
        <div class="col-sm-10">
        <input type="text" name="lates" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Lates ">
        </div>
        </div>
        <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">HD</label>
        <div class="col-sm-10">
        <input type="text" name="hd" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your HD ">
        </div>
        </div>
        <input type="submit" value="save data" class="btn btn-success">
        </form>
        
        
    </div>
    
    






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>