<?php
include 'util.php';
echo"\n search and sort methods.";
echo"\n 1.binary search for integer  2.binary search for string  \n 3.insertion sort for integer 4. insertion sort for string \n 5.bubble sort for integer 6.bubble sort for string";
echo"\n enter your choice:";
$n=checknum();
switch($n)
{
    case 1:search();
           $start=microtime(1);
           $a=bubbsort($s,$a);
           $d=binsearch($s,$a,$e);
           $stop=microtime(1);
           if(!$d)
             echo"\n element not found";
           else
             echo"\n element found";
           echo"\n time elapsed:";
           echo $t1=$stop-$start;
           die();
           break;
    case 2:search1();
           $start=microtime(1);
           $a=bubbsort($s,$a);
           $d=binsearch($s,$a,$e);
           $stop=microtime(1);
           if($d==-1)
             echo"\n string not found";
           else
             echo"\n string found";
           echo"\n time elapsed:";
           echo $stop-$start;
           die();
           break;
    case 3:sortnum();
           $start=microtime(1);
           $a=insersort($s,$a);
           $stop=microtime(1);
           for($i=0;$i<$s;$i++)
           {
               echo " " . $a[$i];
           }
           echo"\n time elapsed:";
           echo $t2=$stop-$start;
           die();
           break;
    case 4:sortstring();
           $a=insersort($s,$a);
           for($i=0;$i<$s;$i++)
           {
               echo " " . $a[$i];
           }
           break;
    case 5:sortnum();
           $start=microtime(1);
           $a=bubbsort($s,$a);
           $stop=microtime(1);
           for($i=0;$i<$s;$i++)
           {
               echo " " . $a[$i];
           }
           echo"\n time elapsed:";
           echo $t3=$stop-$start;
           die();
           break;
    case 6:sortstring();
           $a=bubbsort($s,$a);
           for($i=0;$i<$s;$i++)
           {
              echo " " . $a[$i];
           }
           break;

    default:echo"enter any choice from 1 to 6";
             break;
}

echo"\n difference=" . $t3-$t2;
?>