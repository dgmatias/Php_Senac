<?php
require 'config.php';

session_start ();

$id = $_SESSION['id'];

$sql = $pdo->query("SELECT * FROM usuario where id = $id");

$permitidos = array('image/jpg', 'image/jpeg', 'image/png');

if(in_array($_FILES['arquivo']['type'], $permitidos)) {

        $avatar = $_FILES['arquivo']['name'];
        
        move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivo/'.$avatar);

        $sql = $pdo->prepare('UPDATE usuario set avatar = :avatar where id = :id');
        $sql->bindValue(':id', $id);
        $sql->bindValue(':avatar', $avatar);
        $sql->execute();
        
        echo 'Arquivo salvo com sucesso';
        header('Location index.php');
    } else {
        echo 'Arquivo não permitido';
    } 
    



