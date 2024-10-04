<?php
//Prime number print in range
$temp=0;
for($no=1;$no<=100;$no++)
{
    for($i=2;$i<=$no-1;$i++)
    {
        if($no%$i==0)
        {
            $temp=1;
        }
    }
    if($temp==0)
    {
        echo "$no<br>";
    }
    else
    {
        $temp=0;
    }
}
?>