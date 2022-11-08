<?php

session_start();

require 'config.php';

$dados = filter_input_array (INPUT_POST, FILTER_DEFAULT); 

if ($dados) { 
    $sql = $pdo->prepare("select * from usuario where email = :email");
    $sql->bindValue(":email", $dados['email']); 
    $sql->execute();

    if( $sql->rowCount() === 1) {
        $resultado = $sql->fetch(PDO::FETCH_ASSOC); 

        if(password_verify($dados['senha'], $resultado['senha'])) { 
            
            $_SESSION['id'] = $resultado['id']; 
            $_SESSION['nome'] = $resultado['nome']; 

            header('Location: index.php'); 
             exit;
        } else {
            header('Location: login.php');
            exit;
        }
    } else {
        header('Location: login.php'); 
        exit;
    }

} else {
    header('Location: login.php'); 
    exit;
}