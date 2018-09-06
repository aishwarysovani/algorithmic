<?php
//function to check if input is string or not
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


//function to check string is anagram or not
function anagram($str1,$str2)
{
    $stringParts1 = str_split($str1);
    $s1=sort($stringParts1);
    $stringParts2 = str_split($str2);
    $s2=sort($stringParts2);
    $s1=implode('',$stringParts1);
    $s2=implode('',$stringParts2);
    $s1=strtolower($s1);
    $s2=strtolower($s2);
    if(strcmp($s1,$s2) == 0)
    {
       echo"\n " . $str1 . " and " . $str2 . " are anagram string";
    }
    else{
        echo"\n string are not anagram string";
        
        }
    
}


//function to calculate prime number
function prime($t)
{
    if($t<=1)
      return false;
    for($i=2;$i<=sqrt($t);$i++)
    {
        if($t%$i==0)
        {
          return false;
        }
    }
    return true;
}


?>