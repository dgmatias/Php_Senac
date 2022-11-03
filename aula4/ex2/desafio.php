<?php
$participantes = ['nome1', 'nome2', 'nome3'];

$qtd_participantes = count($participantes)-1;

echo $qtd_participantes. " participantes <br>";

$resultado = rand(1, $qtd_participantes);

echo "O resultado é ". $resultado . " O vencedor foi ". $participantes[$resultado];