<?php
if(isset($_POST['save'])){
    $name = $_POST['txtname'];
    $age = $_POST['txtage'];
    $phono = $_POST['txtphono'];
    $exp = $_POST['txtexp'];
}
$conn = mysqli_connect("localhost", "root" ,"" ,"php_curd");
if($conn){
     echo  "<h1>Conection</h1>";
     $query = "INSERT INTO `employee_details`(`ID`, `Name`, `Age`, `Phono`, `Experience`) VALUES (Null,'$name','$age','$phono','$exp')";
     $cmd = mysqli_query($conn,$query);

     if($cmd){
        echo    "<h1>Data Inserted</h1>";
    }
    else{
        echo "Error";
    }
}
    else{
        echo "<h1> connection is gracefully closed</h1>";
    }
?>