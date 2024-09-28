<?php
$no1=45;
$no2=45;
$no3=45;
if($no1>$no2 && $no1>$no3)
{
echo "is greater:$no1";
}

else if($no2>$no1 && $no2>$no3)
{
echo "is greater:$no2";
}

else if($no3>$no1 && $no3>$no2)
{
echo "is greater:$no3";
}
else if($no1==$no2)
{
echo "both are same:$no1";
}
else if($no2==$no3)
{
echo "both are same:$no2";
}
else if($no3==$no1)
{
echo "both are same:$no3";
}
else if($no1==$no2){
 if($no2==$no3)
{
echo "both are same:$no1";
}
}


?>
