<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
 .circle {
  height: 150px;
  width: 150px;
  background-color: #555;
  border-radius: 50%;
  }
  .semi-circle {
    width: 200px;
    height: 100px; /* as the half of the width */
    background-color: gray;
    border-top-left-radius: 110px;  /* 100px of height + 10px of border */
    border-top-right-radius: 110px; /* 100px of height + 10px of border */
    border: 10px solid gray;
    border-bottom: 0;
}
</style>
   
</head>
<body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <div class="container card" style="width: 30rem ;">

     <h2>Circle</h2>
     <center> <div class="circle"></div></center>
     <form action="05valueofcircle_semicircle.php" method="post">
         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label" ></label>
             <input type="number" class="form-control"min="0" name="txtcircle">
            </div>
            
            
            
            <center><button type="submit" class="btn btn-primary">Submit</button></center>
        </form>
    </div>
    <br><br>
    <div class="container card" style="width: 30rem ;">

     <h2>Semi-Circle</h2>
     <center> <div class="semi-circle"></div></center>
     <form action="05valueofcircle_semicircle.php" method="post">
         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label" ></label>
             <input type="number" class="form-control"min="0" name="txtsemicircle">
            </div>
            
            
            
            <center><button type="submit" class="btn btn-primary">Submit</button></center>
        </form>
    </div>
    <hr><hr>
    <center><h1>Radius Answers</h1></center>
    <div class="container card" style="width: 50rem ;">
      <?php
         $circle = $_POST['txtcircle'];
         $area=pi()*$circle*$circle;
         echo "<h2>The Circle value is ".$area."</h2>";

          
         $semicircle = $_POST['txtsemicircle'];
         $area2=3.14*pi()*$semicircle*$semicircle;
         echo "<h2>The Semi-Circle value is ".$area2."</h2>";

      ?>
    </div>




 


 
</body>
</html>