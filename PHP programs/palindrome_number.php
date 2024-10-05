<?php
$no=$_POST["num"];
$temp=$no;
$rev=0;
while($temp>1)
{
    $rem=$temp%10;
    $rev=$rev*10+$rem;
    $temp=$temp/10;
}
if($no==$rev)
{
    echo"Number is palindrome:$no";

}
else{
    echo"Number is not palindrome:$no";

}

?>