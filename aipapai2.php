<?php

    //a = t, y = j

    $x = readline();

    $t = strlen($x);

    for ($i = 0; $i < strlen($x); $i++) {
        if ($x[$i] === "a") {
            $x[$i] = "t";
        }
        if ($x[$i] === "y") {
            $x[$i] = "j";
        }
    }
     echo $x;
?>