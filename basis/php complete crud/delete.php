<?php
include('include/config.php');
$id = $_GET['id'];

$q = mysqli_query($conn,"delete from users where id = $id;");
if(!$q){
    echo mysqli_error($conn);
}
header('Location:show.php');
?>