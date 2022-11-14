<?php
include('include/config.php');
$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$gender = $_POST['gender'];

$q = mysqli_query($conn , "insert into users values (null,'$name',$age,'$address','$gender');");
if(!$q){
    echo mysqli_error($conn);

}
header('Location:show.php')


?>