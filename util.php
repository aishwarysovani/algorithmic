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


//function for number validation
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


//function to check string is anagram or not
function anagram($str1,$str2)
{
    $str1=strtolower($str1);
    $str2=strtolower($str2);
    $stringParts1 = str_split($str1);
    sort($stringParts1);
    $s1=implode($stringParts1);

    $stringParts2 = str_split($str2);
    sort($stringParts2);
    $s2=implode($stringParts2);
    
    if($s1===$s2)
    {
       return true;
    }
    else{
        return false;        
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

//function for palindrome check
function palindrome($n)
{
    $r=strrev($n);
    if(strcmp($n,$r) == 0)
    {
       return true;
    }
    else{
        return false;        
        }
}

//function for integer search
function search()
{
    global $s;global $a;global $e;
    $a=array($s);
    echo"\n enter size of array:";
           $s=checknum();
           echo"\n enter " . $s . "numbers:";
           for($i=0;$i<$s;$i++)
              $a[$i]=checknum();
           echo"\n enter search element:";
           $e=checknum();
    return;
}

//function for binary sraech
function binsearch($s,$a,$e)
{
    $start=0;$end=count($a)-1;
    while ($start <= $end) {
        $mid = floor(($start + $end) / 2);
        if ($a[$mid] == $e) {
            return true;
         if ($a[$mid] < $e) {
            $end = $mid - 1;

        } else {
            $start = $mid + 1;
        }
    }
}
return false;

}

//function for string search
function search1()
{
    global $s;global $a;global $e;
    $a=array($s);
    echo"\n enter size of array:";
           $s=checknum();
           echo"\n enter " . $s . "strings:";
           for($i=0;$i<$s;$i++)
              $a[$i]=checkstring();
           echo"\n enter search string:";
           $e=checkstring();
    return;
}


//function for input number in integer
function sortnum()
{
    global $s,$a;
    echo"\n enter size of array:";
    $s=checknum();
    echo"\n enter" . $s . "numbers for sort:";
    for($i=0;$i<$s;$i++)
    {
        $a[$i]=checknum();
    }
    return;
}

//function for insertion sort
function insersort($s,$a)
{
   for ($i = 1; $i < $s; $i++)
   {
       $key = $a[$i];
       $j = $i-1;
       while ($j >= 0 && $a[$j] > $key)
       {
           $a[$j+1] = $a[$j];
           $j = $j-1;
       }
       $a[$j+1] = $key;
   }
   return $a;

}


//function for take input in string
function sortstring()
{
    global $s,$a;
    echo"\n enter size of array:";
    $s=checknum();
    echo"\n enter" . $s . "strings for sort:";
    for($i=0;$i<$s;$i++)
    {
        $a[$i]=checkstring();
    }
    return;
}


//function for bubble sort
function bubbsort($s,$a)
{
    for($i=0;$i<$s;$i++)
    {
        for($j=$i+1;$j<$s;$j++)
        {
            if($a[$i]>$a[$j])
            {
            $temp=$a[$i];
            $a[$i]=$a[$j];
            $a[$j]=$temp;
            }
        }
    }
    return $a;
}


//function for merge sort
function mergesort($a, $l, $m, $r)
{
        $n1 = $m - $l + 1; 
        $n2 =  $r - $m; 
        $L=array($n1); 
        $R=array($n2); 
        for ($i = 0; $i < $n1; $i++) 
        {
            $L[$i] = $a[$l + $i]; 
        }
        for ($j = 0; $j < $n2; $j++)
        { 
            $R[$j] = $a[$m + 1 +$j]; 
        }
        $i=0;$j=0;      
        $k = $l; 
        while ($i < $n1 && $j < $n2) 
        { 
            if ($L[$i] <= $R[$j]) 
            { 
                $a[$k] = $L[$i]; 
                $i++; 
            } 
            else
            { 
                $a[$k] = $R[$j]; 
                $j++; 
            } 
            $k++; 
        } 
         while ($i < $n1) 
        { 
            $a[$k] = $L[$i]; 
            $i++; 
            $k++; 
        } 
        while ($j < $n2) 
        { 
            $a[$k] = $R[$j]; 
            $j++; 
            $k++; 
        } 
        return $a;
}


function mergeSort1($a,$l,$r) 
{ 
    $m=$l+($r-$l)/2;
    if ($l < $r) 
    { 
        mergeSort1($a,$l,$m-1); 
        mergeSort1($a,$m,$r); 
  
        $a=mergesort($a, $l, $m, $r); 
    } 
    return $a;
} 


function calnotes($c,$n)
{
   $i=0;$total=0;
    if($c==0)
      {
         return -1;
      }
    else{
        
        if($c>=$n[$i])
        {
        $calnotes =floor($c/$n[$i]);
        $rem=$c%$n[$i];
        $c=$rem;
        $total=$total+$calnotes;
        echo " Notes of " . $n[$i] . "=" . $calnotes;
		}
		$i++;
	    calnotes($c,$n);
    }
}
?>