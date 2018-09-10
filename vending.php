<?php
include 'util.php';
global $total;global $i,$c;$i=0;$total=0;$c=0;
global $n;
$n=array(1000,500,100,50,10,5,2,1);
echo"\n enter your cash:";
$c=checknum();
calnotes($c,$n,$i,$total);

?>