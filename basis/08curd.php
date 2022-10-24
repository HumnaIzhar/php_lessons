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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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

    <center>
        <div class="container card card-body" >
            <form action="08create.php" method="post">
            <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabel" name="txtname"  placeholder=" Enter Your Name ">
            </div>
            </div>
            <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Age</label>
            <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabel" name="txtage"  placeholder=" Enter Your Age ">
            </div>
            </div>
            <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Phono</label>
            <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabel" name="txtphono"  placeholder=" Enter Your Phono ">
            </div>
            </div>
            <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Experience</label>
            <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabel" name="txtexp"  placeholder=" Enter Your Experience">
            </div>
            </div>

            <input type="submit" class="form-control form-control-sm" id="colFormLabel" name="save" vlaue="save data" >
            

            </form>
            
            
        </div>
    </center>
    
    






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>