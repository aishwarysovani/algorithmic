<?php
include 'util.php';
sortstring();
$l=0;$r=$s-1;
$a=mergeSort1($a,$l,$r);

for($i=0;$i<$s;$i++)
{
    echo" " . $a[$i] . " ";
}


?>