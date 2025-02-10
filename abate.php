<?php

$peso1 = 150;
$peso2 = 130;
$arroba = 15;
$preco_arroba = 320;
$produtor ='juquinha';
$qntd_arroba = ($peso1 + $peso2) / $arroba;
$preco_total = $qntd_arroba * $preco_arroba;  

echo "o $produtor ira receber R$". number_format($preco_total,2,",", "."). " pelo animal ";
