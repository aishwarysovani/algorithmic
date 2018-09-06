<?php
include'util.php';
echo'Prime number in 0 to 1000';
$a=1000;
global $ar;$ar=array(1000);
for($i=2;$i<=$a;$i++)
{
  if(prime($i))
  {
    echo "   " . $i . " ";
    $ar[$i]=$i;
  }
}


?>