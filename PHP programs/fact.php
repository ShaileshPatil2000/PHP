<?php
//Write a program in php to check factorial
$no=$_POST["num"];
$fact=1;

for($i=1;$i<=$no;$i++)
{
    $fact*=$i;
}

echo "Factorial=$fact";


?>