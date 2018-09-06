<?php
include'util.php';
echo"This is anagram checking";
echo"\n enter 1st string:";
$str1=checkstring();
echo"\n enter 2nd string:";
$str2=checkstring();
anagram($str1,$str2);

?>