<?php

$numeros = [15, 10, 35, 20, 18, 30, 5, 60, 45, 40];
echo"numeros em ordem original: <br>";
$num_seq = implode(", ", $numeros);
echo $num_seq;

echo"<br><br>numeros em odem crescente: <br>";
sort($numeros);
$num_order = implode(", ", $numeros);
echo$num_order;

echo"<br><br>numeros em ordem decrescente: <br>";
rsort($numeros);
$num_dcre = implode(", ", $numeros);
echo$num_dcre;

?>