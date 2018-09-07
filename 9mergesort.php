<?php
include'util.php';
sortstring();
$l=0;$r=$s-1;
$a=mergeSort1($a,$l,$r);

for($i=0;$i<$s;$i++)
{
    echo" " . $a[$i] . " ";
}

// function mergeSort1($a,$l,$r) 
// { 
//     if ($l < $r) 
//     { 
//         $m = $l+($r-$l)/2; 
//         $a=mergeSort1($a,$l,$m); 
//         $a=mergeSort1($a,$m+1,$r); 
  
//         $a=mergesort($a, $l, $m, $r); 
//     } 
//     return $a;
// } 
?>