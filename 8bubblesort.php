<?php
include'util.php';
sortnum();
$a=bubbsort($s,$a);
for($i=0;$i<$s;$i++)
{
    echo" " . $a[$i] . " ";
}

?>