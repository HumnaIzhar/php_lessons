<?php
session_start();
if((isset($_SESSION['status'])==true)){
    header('Locatin:show.php');
}
else{
    header('Location:login.php');
}
?>
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


<table class="table">
    <tr>
        <th>id</th>
        <th>hospital_name</th>
        <th>hospital_country</th>
        <th>hospital_city</th>
        <th>hospital_email</th>
        <th>hospital_password</th>
        <th>spokeperson_name</th>
        <th>role_id</th>
        <th>hospital_image</th>
        <th>status</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost","root","","hospitalapprovesystem");
    $sql = "SELECT * From `users`";
    $res = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($res)){
    ?>
    <tr>
        <td><? = $row['id']?></td>
        <td><? = $row['hospital_name']?></td>
        <td><? = $row['hospital_country']?></td>
        <td><? = $row['hospital_city']?></td>
        <td><? = $row['hospital_email']?></td>
        <td><? = $row['hospital_password']?></td>
        <td><? = $row['spokeperson_name']?></td>
        <td><? = $row['role_id']?></td>
        <td><img src="upload/<? = $row['hospital_image']?>" width="100px" height="70px" alt=""></td>
        <td><a href="approve.php" class="btn btn-warning">Approve</a>
         <a href="disapprove.php" class="btn btn-warning">Disapprove</a>
        </td>
    </tr>
    <?php
       }
    ?>

</table>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>