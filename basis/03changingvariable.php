<?php
//number swapping
 $variable1 = 7;
 $variable2 = 8;

 echo "The variable 1 store  ".$variable1." and variable 2 stores ".$variable2." <br>";
 $variable1 = $variable1 + $variable2;
 $variable2 = $variable1 - $variable2;
 $variable1 = $variable1 - $variable2;

 echo "The variable 1 stores ".$variable1." and variable 2 stores ".$variable2." ";
?>