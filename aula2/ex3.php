<?php 

$nome = "Latrel";
$idade = 16;
$situacao;



if ($idade < 16) {
    $situacao = "não pode votar";
    echo "$nome tem $idade anos e $situacao";
} else if ($idade == 16 || $idade == 17 || $idade > 70) {
        $situacao = "opcional";
        echo "$nome tem $idade anos e seu voto é $situacao";
    } else {
        $situacao = "obrigatório";
        echo "$nome tem $idade anos e seu voto é $situacao";
    }



