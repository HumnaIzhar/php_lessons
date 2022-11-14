<?php
include('include/config.php');
$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$age = $_POST['age'];
$address = $_POST['address'];
$email = $_POST['email'];
$file = $_POST['file'];
$q = mysqli_query($conn , " update image set name='$name', username='$username',age=$age, address='$address', email='$email',file='$file' where id= $id;");
if(!$q){
    echo mysqli_error($conn);

}
header('Location:show.php');


?>