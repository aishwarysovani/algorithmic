<?php
include 'util.php';    
    echo "enter the number \n";
    $number = checknum();

    $start = 0;
    $final = pow(2, $number) - 1;
    $end = pow(2, $number);
    echo "chosse the number btw " . 0 . " and " . $final . "\n";
    while ($start <= $end) {
        $mid = floor(($start + $end) / 2);
        echo "press 1 if your num is =" . $mid . "\n";
        echo "press 2 if your num is <" . $mid . "\n";
        echo "press 3 if your num is >" . $mid . "\n";
        $your = checknum();
        if ($your == 2) {
            $end = $mid - 1;
        } elseif ($your == 3) {
            $start = $mid + 1;
        } else {
            echo "your num = " . $mid . "\n";
            break;
        }
    }

?>