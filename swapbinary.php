<?php
include 'util.php';
echo"enter any decimal number:";
$n=checknum();
$n=checkpositive($n);
$n1=decbin($n);
echo $n1;
$n=swapNibbles($n);
echo "\n" . $n;
$n2=decbin($n);
echo "=" . $n2;
if(($n & ($n - 1)) == 0)
    echo "\n" .  $n . " is power of two";
else
    echo "\n" . $n . " is not power of two";

?>