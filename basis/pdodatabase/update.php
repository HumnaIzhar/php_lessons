<?php
include('include/config.php');
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];


$q = mysqli_query($conn , " update users set name='$name', age=$age, address='$address' where id= $id;");
if(!$q){
    echo mysqli_error($conn);

}
header('Location:show.php');


?>