<?php
include 'util.php';
echo"\n search and sort methods.";
echo"\n 1.binary search for integer";
$t=array(6);
           search();
           $start=microtime(1);
           $a=bubbsort($s,$a);
           $d=binsearch($s,$a,$e);
           $stop=microtime(1);
           if($d==true)
             echo"\n element found";
           else
             echo"\n element not found";
           echo"\n time elapsed:";
           echo $t[0]=$stop-$start;
           
           
    echo"\n 2.binary search for string";
           search1();
           $start=microtime(1);
           $a=bubbsort($s,$a);
           $d=binsearch($s,$a,$e);
           $stop=microtime(1);
           if($d==true)
             echo"\n string found";
           else
             echo"\n string not found";
           echo"\n time elapsed:";
           echo $t[1]=$stop-$start;
           
           
    echo" \n 3.insertion sort for integer";       
           sortnum();
           $start=microtime(1);
           $a=insersort($s,$a);
           $stop=microtime(1);
           for($i=0;$i<$s;$i++)
           {
               echo " " . $a[$i];
           }
           echo"\n time elapsed:";
           echo $t[2]=$stop-$start;
          
           
    echo"\n 4. insertion sort for string";       
           sortstring();
           $start=microtime(1);
           $a=insersort($s,$a);
           $stop=microtime(1);
           for($i=0;$i<$s;$i++)
           {
               echo " " . $a[$i];
           }
           echo"\n time elapsed:";
           echo $t[3]=$stop-$start;
           
           
     echo"\n 5.bubble sort for integer";      
           sortnum();
           $start=microtime(1);
           $a=bubbsort($s,$a);
           $stop=microtime(1);
           for($i=0;$i<$s;$i++)
           {
               echo " " . $a[$i];
           }
           echo"\n time elapsed:";
           echo $t[4]=$stop-$start;
           
           
     echo"\n 6.bubble sort for string";      
           sortstring();
           $start=microtime(1);
           $a=bubbsort($s,$a);
           $stop=microtime(1);
           for($i=0;$i<$s;$i++)
           {
              echo " " . $a[$i];
           }
           echo"\n time elapsed:";
           echo $t[5]=$stop-$start;
           
          
  $t=bubbsort(6,$t);
  echo"\n time elapsed:";
  for($i=0;$i<6;$i++)
  {
     echo " " . $t[$i];
  }

?>