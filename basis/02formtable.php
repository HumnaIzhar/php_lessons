 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<style>
    .fff{
        float: left;
    }

</style>
<body>
    <fieldset class="fff">
        <legend>form data</legend>
          <form action="02formtable.php" method="post">
             <h3>Name</h3>
             <input type="text" placeholder="Enter Your Name" name="txtname">
             <h3>Email</h3>
             <input type="email" placeholder="Enter Your Email" name="txtemail">
             <h3>Age</h3>
             <input type="number" placeholder="Enter Your Age" name="txtage">
             <br><br>
             <input type="submit">
           </form>
    </fieldset>
    
    
</body>
</html>
<?php
   echo'<table border="2px">
       <tr>
         <th>Name</th>
         <th>Email</th>
         <th>Age</th>
       </tr>
       <tr>
         <td> '.$_POST['txtname'].' </td>
         <td> '.$_POST['txtemail'].' </td>
         <td> '.$_POST['txtage'].' </td>
       </tr>  
   </table>';
?>