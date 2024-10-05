<?php


$no=153;
$temp=$no;

while($no>1)
{
    $rem=$no%10;
    $sum=$sum+($rem*$rem*$rem);
    $no=$no/10;
}
if($temp==$sum)
echo"arm";
else
echo"Not arm";
?>