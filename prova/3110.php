<?php
$n = readline();
for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 5; $j++) {
        $x[$i][$j] = readline();

        if($x[$i][$j] >= $n) {
            echo "Valor Encontrado: " . number_format($x[$i][$j], 2, ".", "") . " Linha: $i Coluna: $j" . PHP_EOL;
        }
    }
}

?>