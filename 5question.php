<?php
//include'util.php';
echo"enter k value for guess:";
$k=readline();
$n=pow(2,$k);
$s=0;
echo"\n think of integer between 0 to" . $n-1 . " ";
$num=findques($s,$n);
echo"\n your number is=" . $num;

function findques($s,$n)
{
    if(($n-$s)==0)
       return $n;
    $mid = $n + ($n - $s) / 2;
       echo"Is it less than? " . $mid;
    if(true)
       return findques($s, $mid);
    else                     
       return findques($mid, $n);

}
?>