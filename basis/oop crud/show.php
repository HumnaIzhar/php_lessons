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
<a href="index.php">Back To HOME</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">age</th>
            <th scope="col">address</th>
        </tr>
    </thead>
    <tbody>
    <!-- php oop query with pdo -->
    <?php
          require_once('oop/db.php');
          $hostname = "localhost";
          $username = "root";
          $password = "";
          $dbname = "users";
          $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
          $query = "select * from student";
           $result = $obj->show();
          while ($row = mysqli_fetch_assoc($result)) {
  ?>
     <!-- simple php query -->
     <!-- <?php
    //  require_once('oop/db.php');
    //  $res = $obj->show();
    //  while($row=mysqli_fetch_assoc($res)){
      
     ?> -->
     <tr>
        <th scope="row"><?= $row['id'] ?></th>
        <td><?= $row['name'] ?></td>
        <td><?= $row['age'] ?></td>
        <td><?= $row['address'] ?></td>
        <td><a class="btn btn-warning" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
        <a class="btn btn-danger" href="delete.php?id=<?= $row['id'] ?>">Delete</a>
        </td>
     </tr>   
     <?php

    }
    ?>
    </tbody>


</table>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>