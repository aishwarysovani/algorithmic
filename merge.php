<?php
include 'util.php';
sortstring();
$l=0;$r=$s-1;
$a=mergeSort($a,$l,$r);

for($k=0;$k<$s;$k++)
{
    echo" " . $a[$k] . " ";
}


?>