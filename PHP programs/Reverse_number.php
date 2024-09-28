<?php
$no=4321;
$rev=0;
while($no>1)
{
    $rem=$no%10;
    $rev=$rev*10+$rem;
    $no=$no/10;
}
echo "Reverse=$rev";

?>