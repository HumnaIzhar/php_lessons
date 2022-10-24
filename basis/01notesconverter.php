<?php
$frstname = "Humna";
$lastname = "izhar";
echo "My First name is ".$frstname."<br> My last name is ".$lastname."<br>";

$num1 = 45;
$num2 = 30;
echo "This is addition ".($num1+$num2)."<br>";
echo "This is Subtraction ".($num1-$num2)."<br>";
echo "This is product ".($num1*$num2)."<br>";
echo "This is division ".($num1/$num2)."<br>";

echo "possible notes are 5000,1000,500,200,100";
$amount = 10000;
$total =(int) $amount/5000;
echo "<br> there are ".(int) $total."note of 5000";
$amount = $amount - ((int) $total * 5000);
$total =(int) $amount/1000;
echo "<br> there are ".(int) $total."note of 1000";
$amount = $amount - ((int) $total * 1000);
$total =(int) $amount/500;
echo "<br> there are ".(int) $total."note of 500";
$amount = $amount - ((int) $total * 500);
$total =(int) $amount/200;
echo "<br> there are ".(int) $total."note of 200";
$amount = $amount - ((int) $total * 200);
$total =(int) $amount/100;
echo "<br> there are ".(int) $total."note of 100";


?>