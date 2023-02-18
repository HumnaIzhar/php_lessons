<?php
require_once('oop/db.php');
$id = $_GET['id'];
$obj->delete($id);
header('Location:show.php');
?>