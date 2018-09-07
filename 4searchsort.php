<?php
include'util.php';
echo"\n search and sort methods.";
echo"\n 1.binary search for integer  2.binary search for string  \n 3.insertion sort for integer 4. insertion sort for string \n 5.bubble sort for integer 6.bubble sort for string";
echo"\n enter your choice:";
$n=checknum();
switch($n)
{
    case 1:search();
           StopWatch::start();
           $d=binsearch($s,$a,$e);
           StopWatch::stop();
           if($d==-1)
             echo"\n element not found";
           else
             echo"\n element found";
           echo"time elapsed:" . Stopwatch::elapsed();
           break;
    case 2:search1();
           $d=binsearch($s,$a,$e);
           if($d==-1)
             echo"\n string not found";
           else
             echo"\n string found";
           break;
    case 3:sortnum();
           $a=insersort($s,$a);
           for($i=0;$i<$s;$i++)
           {
               echo " " . $a[$i];
           }
           break;
    case 4:sortstring();
           $a=insersort($s,$a);
           for($i=0;$i<$s;$i++)
           {
               echo " " . $a[$i];
           }
           break;
    case 5:sortnum();
           $a=bubbsort($s,$a);
           for($i=0;$i<$s;$i++)
           {
               echo " " . $a[$i];
           }
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

class StopWatch {
  
    public static $startTimes = array();
    public static $stopTimes = array();
  
    public static function start($timerName = 'default') {
      self::$startTimes[$timerName] = microtime(true);
    }
    
    public static function stop($timerName = 'default') {
        self::$stopTimes[$timerName] = microtime(true);
      }
    public static function elapsed($timerName = 'default') {
      self::$stopTimes[$timerName] - self::$startTimes[$timerName];
    }
    
  
  }
?>