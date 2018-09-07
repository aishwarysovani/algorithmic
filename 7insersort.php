<?php
include'util.php';
echo"\n proram for insertion sort";
sortstring();
$a=insersort($s,$a);
for($i=0;$i<$s;$i++)
{
    echo" " . $a[$i] . " ";
}
?>