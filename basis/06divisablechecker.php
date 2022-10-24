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
 <nav class="navbar navbar-expand-lg navbar-light bg-success">
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
 
</nav>
<br><br><br>

<div class="container card card-body "style="width:50em">
<center>
    <h1>Divisable Checker</h1>
</center>


 <form action="06divisablechecker.php" method="post">
      <div class="form-group row">
          <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Number</label>
          <div class="col-sm-10">
             <input type="number" name="num" min="1" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Number ">
          </div>
        </div>
      <div class="form-group row">
          <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Divisable</label>
         <div class="col-sm-10">
             <input type="number" name="div" min="1" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Value ">
         </div>
       </div>
       <center><input type="Submit" class="btn btn-primary"></center>
   </form>

</div>

 
 
  
    
    






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
  $table = $_POST['num'];
  $div = $_POST['div'];

  if($table % $div == 0){
     echo "<h1>".$table." is divisable by ".$div."</h1>";
   }
  else{
     echo "<h1>not divisable , and reminder is ".($table %  $div)." </h1>";
   }

   $num = 4;
   $factorial =1;
   for($x = $num;$x>=1;$x--)
   {
    $factorial = $factorial*$x;
   }
   echo "factorial of $num is $factorial";



?>