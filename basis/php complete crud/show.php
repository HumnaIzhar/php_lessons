<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

<title>Hello, world!</title>
</head>
<body>
<div class="jumbotron">
  <center>
  <h1 style="font-size:69px; color:brown" class="display-4">PHP CRUD</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p></center>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
<br>
<center><h1>Show Table</h1></center>
<table id="table_id" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    </thead>
    <tbody>
        <?php
        include('include/config.php');
        $q = mysqli_query($conn,"select * from users;");
        while ($row = mysqli_fetch_assoc($q)) {
        ?>
        <tr>
         <td><?= $row['id'] ?></td>
         <td><?= $row['name'] ?></td>
         <td><?= $row['age'] ?></td>
         <td><?= $row['address'] ?></td>
         <td><?= $row['gender'] ?></td>
         <td><a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a></td>
         <td><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>



       </tr>
      <?php

      }
      ?>
    </tbody>


</table>
<a href ="index.php">Go To From</a>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script
     src="https://code.jquery.com/jquery-3.6.1.js"
     integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
     crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
    $('#table_id').DataTable();
} );
    </script>
    
</body>
</html>