<?php

while(true)
{
    $n = readline();
    if($n == 0) { break;}
    $cords = readline();
    $cords = explode(" ", $cords);

    $p1 = $cords[0];
    $p2 = $cords[1];

    for($i = 0; $i < $n; $i++) {
        $s = "";
        $cords = readline();
        $cords = explode(" ", $cords);

        $x = $cords[0];
        $y = $cords[1];

        if($y < $p2) {
            $s = "S";
        }
        if($y > $p2) {
            $s = "N";
        }

        if($x < $p1) {
            $s .= "O";
        }if($x > $p1) {
            $s .= "E";
        }

        if(($x == $p1) || ($y == $p2)) {
            $s = "divisa";
        }

        echo trim($s) . PHP_EOL;
    }
}
?>