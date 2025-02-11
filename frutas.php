<?php
$frutas =array("maça, banana, uva, pera, laranja");

foreach ($frutas as $fruta) {
    echo $fruta. "<br>";
}

echo "-------------------------------<br>";
$frutas[] = "morango";
foreach ($frutas as $fruta) {
    echo $fruta. "<br>";
}

echo "-------------------------------<br>";
array_shift($frutas);// REMOVE O PRIMEIRO ELEMENTO DO ARRAY
unset($frutas[3]);// REMOVE O ELEMNTO ATRAVÉS D INDICE

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}