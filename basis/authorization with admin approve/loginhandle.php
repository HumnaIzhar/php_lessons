<?php
$hos_name = $_POST['hos_name'];
$hos_email = $_POST['hos_email'];
$hos_pass = $_POST['hos_pass'];
$conn = mysqli_connect("localhost","root","","hospitalapprovesystem");
$sql = "SELECT FROM `users` WHERE hospital_email='$hos_email'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
if(($row['hos_name']==$hos_name)&&($row['hos_email']==$hos_email)&&($row['hos_pass']==$hos_pass)){
    header('Location:profile.php');
}
else{
    header('Location:login.php');
}
?>