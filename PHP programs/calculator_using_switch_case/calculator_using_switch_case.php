<?php
$no1=$_POST["num1"];
$no2=$_POST["num2"];
$oper=$_POST["oper"];
$c=0;
switch($oper)
{
        case '+': $c=$no1+$no2;
        echo"Addition=$c";
        break;

        case '-':$c=$no1-$no2;
        echo"Substraction=$c";
        break;

        case '*':$c=$no1*$no2;
        echo"Multiplication=$c";
        break;

        case '/':$c=$no1/$no2;
        echo"Division=$c";
        break;

        default:
        echo "<h1>Your wrong choice!!!!<h1>";
}
?>