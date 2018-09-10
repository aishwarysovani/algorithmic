<?php
include 'util.php';
echo"enter value for month like 1 for jan,2 for feb...so on  ";
$m=checknum();
echo"\n enter value for day of month 1 to 30:";
$d=checknum();
echo"\n enter value for year:";
$y=checknum();
$yo = $y -floor((14 - $m) / 12);
$yo=(int)$yo;
$x = $yo + floor($yo / 4) - floor($yo / 100) + floor($yo / 400);
$x=(int)$x;
$mo = $m + (12 * floor((14 - $m) / 12)) - 2;
$mo=(int)$mo;
$do = ($d + $x + floor((31 * $mo) / 12))% 7;
$do=(int)$do;
$dowMap = array('Sunday', 'Monday', 'Tuesday', 'Wedensday', 'Thuersday', 'Friday', 'Saturday');
echo $dowMap[$do];


?>