<?php

require 'config.php';

$permitidos = array('image/jpg', 'image/jpeg', 'image/png');

if(in_array($_FILES['arquivo']['type'], $permitidos)) {
    $nome = md5(time().rand(0, 1000)).'jpg';
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'img/'.$nome);

    echo 'Arquivo salvo com sucesso';
} else {
    echo 'Arquivo não permitido';
}

