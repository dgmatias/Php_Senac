<?php

    $nome = "Fred";
    $idade = 19;
    $habilitação;

    if ($idade > 18) {
        $habilitação = 'apto';
        echo ("$nome está $habilitação a dirigir");
    } else {
        $habilitação = 'incapcitado';
        echo ("$nome está $habilitação a dirigir");
    }


