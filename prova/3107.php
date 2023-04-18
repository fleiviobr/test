<?php 
//Tempo de Viagem

$velocidade = readline();
$distancia = readline();
$consumo = readline();

$horas = $distancia/$velocidade;
$combustivel = $distancia/$consumo;
echo "Total horas: " . number_format($horas, 2, ".", "") . PHP_EOL;
echo "Total combustivel: " . number_format($combustivel, 2, ".", "") . PHP_EOL;
?>