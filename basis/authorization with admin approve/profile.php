<?php
session_start();
if(($_SESSION['status']==0)&&(isset($_SESSION['image'])==true)&&(isset($_SESSION['sp_name'])==true)){
    header('Location:profile.php');
}
else{
    header('Location:login.php');
    exit;
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
<style>
    img{
        border: 2px solid black;
        padding: 2px;
        background-color: white;
        border-radius: 50%;
    }
    div{
        display: flex;
        justify-content: center;
        align-self: center;
        margin-top: 10%;
    }
    body{
        background-color: purple;
    }
</style>
<body>
<div>
    <center>
           <img src="upload/Shahid-Afridi-3.jpg" width="200px" height="120px" alt="">
            <h1 class="text-white">Spoke Person name</h1>
            <p class="text-white">you are approved to vacceen</p>
            <a href="logout.php" class="btn btn-secondary">Log out</a>
    </center>
</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>