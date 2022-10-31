<!DOCTYPE HTML>  
<html>
<head>
</head>
<style>
.error {color: #FF0000;}
.box{
  height : 500px;
  width: 600px;
  border:2px solid grey ;
}

</style>
<body>  

<?php
// define variables and set to empty values
$name = $password = $company = $comment = $gender = "";
$nameErr = $passwordErr = $genderErr = $commentErr = $companyErr = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = sanitize_data($_POST["name"]);
    }
    
    if (empty($_POST["password"])) {
      $passwordErr = "password is required";
    } else {
      $password = sanitize_data($_POST["password"]);
    }
      
    if (empty($_POST["company"])) {
      $companyErr = "comapny is required";
    } else {
      $company = sanitize_data($_POST["company"]);
    }
  
    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = sanitize_data($_POST["comment"]);
    }
  
    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = sanitize_data($_POST["gender"]);
    }
  }
  

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $name = sanitize_data($_POST["name"]);
//   $password= sanitize_data($_POST["password"]);
//   $company = sanitize_data($_POST["company"]);
//   $comment = sanitize_data($_POST["comment"]);
//   $gender = sanitize_data($_POST["gender"]);
// }

function sanitize_data($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  class="box">  
<h2>Data is sanitized</h2>
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Password: <input type="text" name="password">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  Company: <input type="text" name="company">
  <span class="error">* <?php echo $companyErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</center>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $password;
echo "<br>";
echo $company;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>