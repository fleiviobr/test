<?php
while (true) {
    $k = (int) readline();
    if ($k == 0) break;
    [$n, $m] = explode(' ', readline());
    for ($i = 0; $i < $k; $i++) {
        [$x, $y] = explode(' ', readline());
        if ($x == $n || $y == $m) {
            echo "divisa\n";
        } else {
            echo ($y > $m ? 'N' : 'S') . ($x > $n ? 'E' : 'O') . "\n";
        }
    }
}
?>




