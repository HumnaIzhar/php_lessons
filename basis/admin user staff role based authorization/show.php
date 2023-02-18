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

<?php
error_reporting(0);
require_once('include/config.php');
session_start();
if ((isset($_SESSION['uname'])) && (($_SESSION['role'] == 1) || ($_SESSION['role'] == 3)) && ($_SESSION['islogin'] == true)) {
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <?php
        if ($_SESSION['role'] == 1) {
            # code...
            ?>
       <th scope="col">Edit</th>
      <th scope="col">Delete</th>
            <?php
        }
      ?>
     

    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "select * from product;";
    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($res)){
        ?>
    <tr>
      <th scope="row"><?= $row['Id']; ?> </th>
      <td><?= $row['name']; ?></td>
      <td><?= $row['descri']; ?></td>
      <td><?= $row['price']; ?></td>
      <td> <img  src="upload/<?= $row['img'] ?>"; width="100" height="100"> </td>
      <?php
        if ($_SESSION['role'] == 1) {
            # code...
            ?>
       <td><button class="btn btn-warning">Edit</button></td>
      <td><button class="btn btn-warning">Delete</button></td>
            <?php
        }
      ?>
</tr>
        <?php
    }
?>
  </tbody>
</table>

<?php
}
?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>