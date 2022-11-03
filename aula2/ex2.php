<?php


$n1 = 8; 
$n2 = 7.5;
$n3 = 10;
$n4 = 9;

$medPonderada;

$medPonderada = ($n1 * 1 + $n2 * 2 + $n3 * 3 + $n4 * 4) / (1 + 2 + 3 + 4);

print_r("a média ponderada entre os valores $n1 , $n2 , $n3 e $n4 é igual a $medPonderada");