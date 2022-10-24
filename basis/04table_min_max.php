<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

  
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <nav  class="navbar navbar-expand-lg bg-light" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<center><h1>Table Calculator</h1></center>

    <div class="container card" style="width: 50rem ;">
        
        <form action="04table_min_max.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Table</label>
                <input type="number" class="form-control"min="0" name="txtname">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Min</label>
                <input type="number" class="form-control"min="0" name="txtmin">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Max</label>
                <input type="number" class="form-control" min="0" name="txtmax">
            </div>
            
            <center><button type="submit" class="btn btn-primary">Submit</button></center>
        </form>
    </div>
    <hr><hr>
    <center>
        <h1>Table Print</h1>
        <div class="container card" style="width: 50rem ;">

           <?php
             $table= $_POST['txtname'];
             $min= $_POST['txtmin'];
             $max= $_POST['txtmax'];
             echo "<h2>The table of ".$table."</h2>";
              for($i =$min; $i <= $max; $i++){
                 echo "<h3>".$table."x".$i."=".$table*$i."</h3>";
                }
            ?>
        </div>
    </center>


  </body>
</html>
