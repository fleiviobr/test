<?php
 $x;
 for ($i = 0; $i < 10; $i++) {
    for ($j =0; $j < 10; $j++) {
        $x[$i][$j] = readline();
    }
 }
 $y = fgets(STDIN);
 
 for ($i = 0; $i < 10; $i++) {
    for ($j =0; $j < 10; $j++) {
        if ( $y == $x[$i][$j]) {
            echo "ai papai!!";
        }
    }
 }
?>