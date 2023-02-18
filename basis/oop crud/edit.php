<?php
require_once('oop/db.php');
$id = $_GET['id'];
$res = mysqli_query($obj->con,"select * from student where id=$id");
$row=mysqli_fetch_assoc($res)
?>
<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<title>Hello, world!</title>
</head>
<body>
<div class="container card mt-4">
    <form action="" method="POST">
        <h3>id</h3>
        <input readonly type="number" value="<?=$row['id'] ?>" placeholder="Enter Your id" class="form-control" name="id" id="">
        <h3>Name</h3>
        <input type="text" value="<?=$row['name'] ?>" placeholder="Enter Your Name" class="form-control" name="name" id="">
        <h3>Age</h3>
        <input type="number"  value="<?=$row['age'] ?>" min="0" placeholder="Enter Your Age" class="form-control" name="age" id="">
        <h3>Address</h3>
        <input type="text"  value="<?=$row['address'] ?>" placeholder="Enter Your Address" class="form-control" name="address" id="">
        <input type="submit" class="form-control btn btn-danger mt-4 mb-4" name="btnedit"> 

    </form>
</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['btnedit'])){
    $result = $obj->edit($_POST['name'],$_POST['age'],$_POST['address'],$_POST['id']);
    if($result){
        echo "data edit";
        header('Location:show.php');
    }

}
?>