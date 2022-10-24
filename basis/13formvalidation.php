<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}

.box{
  height : 300px;
  width: 400px;
  border:2px solid grey ;
}
</style>
</head>
<body>  

<?php

$nameErr = $emailErr = $ageErr = "";
$name = $email = $age = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  

  if (empty($_POST["age"])) {
    $ageErr = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
  }

  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<center>
  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="box">  
<h2>Form Validation</h2>
   Name: <input type="text" name="name">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Age: <input type="text" name="age">
   <span class="error">*<?php echo $ageErr;?></span>
   <br><br>
  
   <br><br>
   <input type="submit" name="submit" value="Submit">  
 </form>
</center>


<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $age;
echo "<br>";
?>

</body>
</html>