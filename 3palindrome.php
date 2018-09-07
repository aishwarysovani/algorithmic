<?php
include'util.php';

echo"\n prime palindrome form 0 to 1000";
echo"\n";
for($i=2;$i<=1000;$i++)
{
    if(prime($i))
    {
    if(palindrome($i))
    {
        echo $i . " ";
    }
}
    
}

echo"\n prime anagram from 0 to 1000";
echo"\n";

for($i=2;$i<=999;$i++)
{
    for($j=$i+1;$j<=1000;$j++)
    {
    if(prime($i) && prime($j))
    {
        if(anagram($i,$j))
        {
            echo "[" . $i . " and " . $j . "]  ";
        }
    }
}
}
?>