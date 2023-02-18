<?php
require_once('include/config.php');
$uname = $_POST['uname'];
$age = $_POST['age'];
$address = $_POST['address'];
$pass = $_POST['pass'];
$role = $_POST['role'];
$sql ="INSERT INTO `users`(`id`, `username`, `age`, `address`, `password`, `role`) VALUES (null,'$uname','$age','$address','$pass','$role')";
mysqli_query($conn,$sql);
header("Location:login.php");
?>