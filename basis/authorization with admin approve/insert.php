<?php
$hos_name = $_POST['hos_name'];
$hos_coun = $_POST['hos_coun'];
$hos_city = $_POST['hos_city'];
$hos_email = $_POST['hos_email'];
$hos_pass = $_POST['hos_pass'];
$hos_spname = $_POST['hos_spname'];
$role_id = $_POST['role_id'];
$hos_img = $_FILES['hos_img'];
$status = 0;
print_r($hos_img);
$hos_imgname = $hos_img['name'];
$hos_imgtempname = $hos_img['tmp_name'];
move_uploaded_file($hos_imgtempname, "upload/$hos_imgname");

$conn = mysqli_connect("localhost","root","","hospitalapprovesystem");
$sql = "INSERT INTO `users`(`id`, `hospital_name`, `hospital_country`, `hospital_city`, `hospital_email`, `hospital_password`, `spokeperson_name`, `role_id`, `hospital_image`, `status`) VALUES (null,'$hos_name','$hos_coun','$hos_city','$hos_email','$hos_pass','$hos_spname','$role_id','$hos_imgname','$status')";
mysqli_query($conn,$sql);

session_start();
$_SESSION['name'] = $hos_name;
$_SESSION['sp_name'] = $hos_spname;
$_SESSION['status'] = $status;
?>