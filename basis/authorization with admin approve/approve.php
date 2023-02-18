<?php
session_start();
$id = $_GET['id'];
$_SESSION['status'] = 1;
header("location:login.php");
?>