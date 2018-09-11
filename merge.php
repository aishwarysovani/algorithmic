<?php
//include 'util.php';
// sortstring();
function checknum()
{
    fscanf(STDIN,'%d',$num);
    if (filter_var($num, FILTER_VALIDATE_INT))
    {
        return $num;

    }
    else
    {
        echo 'enter only number ';
        return checknum();
        
    }
}

function checkstring()
{
    fscanf(STDIN,'%s',$str);
    if (!filter_var($str, FILTER_VALIDATE_INT))
    {
        return $str;

    }
    else
    {
        echo 'enter only string ';
        return checkstring();
        
    }
}
global $s,$a;
echo"\n enter size of array:";
$s=checknum();
echo"\n enter" . $s . "strings for sort:";
for($i=0;$i<$s;$i++)
{
    $a[$i]=checkstring();
}
print_r($a);
$l=0;$r=$s-1;
$a=mergeSort($a);

for($k=0;$k<$s;$k++)
{
    echo" " . $a[$k] . " ";
}

function mergeSort($array)
{
    if(count($array) == 1 )
    {
        return $array;
    }

    $mid = count($array) / 2;
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);
    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right)
{
    $res = array();

    while (count($left) > 0 && count($right) > 0)
    {
        if($left[0] > $right[0])
        {
            $res[] = $right[0];
            $right = array_slice($right , 1);
        }
        else
        {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }
    }

    while (count($left) > 0)
    {
        $res[] = $left[0];
        $left = array_slice($left, 1);
    }

    while (count($right) > 0)
    {
        $res[] = $right[0];
        $right = array_slice($right, 1);
    }

    return $res;
}
?>