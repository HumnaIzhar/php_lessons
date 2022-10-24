<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="if_elseif.php" method="post">
        <input type="text" name="color">
        <input type="submit" name="save" class="btn btn-success">
    </form>
</body>
</html>
<?php
$favcolor = $_POST['color'];
if($favcolor == 'red'){
    echo "you like red color";
}
elseif($favcolor == 'blue'){
    echo "you like blue color";
}
elseif($favcolor == 'yellow'){
    echo "you like yellow color";
}
else{
    echo "No color selected";
}

?>
