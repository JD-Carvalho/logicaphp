<?php
$n1 = 10;
$n2 = 9;
$n3 = 6;
$n4 = 9;
$nome = 'luiz';

$media = ($n1 + $n2 +  $n3 + $n4) / 4;

if ($media>=7){
  echo "o aluno $nome foi aprovado com média $media ";
}else if ($media <7  && $media >=5){
    echo "o aluno $nome esta de recuperação com média $media";
}else{
    echo "o aluno $nome foi reprovado com média $media ";
}