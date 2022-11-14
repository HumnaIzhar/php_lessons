<?php
error_reporting(0);
include('include/config.php');
$name = $_POST['name'];
$username = $_POST['username'];
$age = $_POST['age'];
$address = $_POST['address'];
$email = $_POST['email'];
$file = $_FILES['file'];
print_r($file);
$imagename = $file['name'];
$imageTempname = $file['tmp_name'];
move_uploaded_file($imageTempname,"image/$imagename");
$q = mysqli_query($conn, "INSERT INTO image VALUES 
(null,'$name','$username',$age,'$address','$email','$imagename');");
if(!$q){
    echo mysqli_error($conn);
}

header('Location:show.php');
?>