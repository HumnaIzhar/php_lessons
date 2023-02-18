<?php
require_once('include/config.php');
$name = $_POST['name'];
$descri = $_POST['descri'];
$price = $_POST['price'];
$img = $_Files['img'];
$imgname = $img['name'];
move_uploaded_file($img['tmp_name'],"upload/$imgname");
$sql ="INSERT INTO `product`(`id`, `name`, `descri`, `price`, `image`) VALUES (null,'$name','$descri','$price','$imgname')";
mysqli_query($conn,$sql);
header("Location:show.php");
?>