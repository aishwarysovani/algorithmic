<?php
include 'util.php';
echo"enter value of any decimal number:";
$n=checknum();
$n=checkpositive($n);
$x="";
while($n>=1)
{
    $a=$n%2;
    $x = $a . "" . $x;
    $n = $n/2;
}
echo $x;


?>