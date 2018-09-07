<?php
include'util.php';
echo"This is anagram checking";
echo"\n enter 1st string:";
$str1=checkstring();
echo"\n enter 2nd string:";
$str2=checkstring();
$a=anagram($str1,$str2);
if($a==true)
{
    echo"\n " . $str1 . " and " . $str2 . " are anagram string";
}
else{
    echo"\n string are not anagram string";
}
?>