<?php
error_reporting(0);
require_once('include/config.php');
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$role = $_POST['role'];
$sql = "select * from users where username='$uname'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
if (($row['username']==$uname) && ($row['password']==$pass) && ($row['role']==$role)) {
    header("Location:index.php");
    session_start();
    $_SESSION['uname'] = $uname;
    $_SESSION['role'] = $role;
    $_SESSION['islogin'] = true;
}
else{
    echo "Login denied";
}
?>