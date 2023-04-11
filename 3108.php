<?php

$n = readline();

while (0 < $n) {

    $space = 0;
    $x = trim(readline());
    $y = "";
    for ($i = 0; $i < strlen($x); $i++) {
        if ($x[$i] === " "){
            $space++;
        }
    }

    $xe = explode(" ", $x);
    for($i = 0, $j = $space; $i <= $space; $i++, $j--) {
        $y .= $xe[$j] . " ";
    }
    
    for($i = 0; $i < strlen($y); $i++) {
        if($y[$i] === "P") {
            $y[$i] = "B";
        }
        if($y[$i] === "F") {
            $y[$i] = "V";
        }
        if($y[$i] === "T") {
            $y[$i] = "D";
        }
        if($y[$i] === "R") {
            $y[$i] = "L";
        }
        if($y[$i] === "J") {
            $y[$i] = "Z";
        }
        if($y[$i] === "X") {
            $y[$i] = "S";
        }
    }

    echo trim($y). PHP_EOL;
    $n--;
}

?>