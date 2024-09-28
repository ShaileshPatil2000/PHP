<?php
//Write a program in php to check number is prime or not prime
$no=$_POST["num"];
$temp=0;

for($i=2;$i<=$no-1;$i++)
{
    if($no%2==0)
    {
        $temp+=1;
    }
}
if($temp>0)
echo "Not prime";
else
echo "Prime";

?>