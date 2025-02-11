<?php

$taxas = [
    'dolar' => 5.41,
    'euro' => 6.57,
    'libra' => 7.13,
    'peso argentino' => 0.5
];

$valor = 100;

foreach ($taxas as $moeda => $taxa) {
    $conversao = $valor / $taxa;
    echo "R$ $valor em $moeda é igual a $conversao<br>". number_format($conversao, 2, ',', '.')."<br>";
}