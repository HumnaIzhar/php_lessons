<?php
$name = $_POST['txtname'];
$address = $_POST['txtadd'];
$age = $_POST['txtage'];

$con = mysqli_connect("localhost","root","","formhandling");
if(!$con){
    echo "connection refuse";
}
else{
    echo "connection accept";
}

$query ="insert into formhandlig  values (null,'$name','$address',$age)";
$q = mysqli_query($con,$query);
if(!$query){
    echo "Query not executed";
}
else{
    echo "Query executed";
}



?>