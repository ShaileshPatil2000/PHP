<?php
// Write a program in php to check Leap year or Not leap year?
$year=$_POST["num"];
if($year%400==0 ||($year%4==0 && $year%100!=0))
echo"Leap year";
else
echo"Not leap year";
?>