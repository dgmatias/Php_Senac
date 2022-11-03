<?php 

require 'config.php';

$name = filter_input (INPUT_POST, 'name'); 
$email =  filter_input (INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

//verificar se o nome e o email são validos

if ($name && $email) {
    $sql = $pdo -> prepare ( "INSERT INTO tbl_usuario (nome, email)  VALUES  (:name, :email)" );
    $sql -> bindValue (':name', $name);
    $sql -> bindParam (':email', $email);
    $sql -> execute ();
    
    header("Location: index.php");
    
} else {
header ("Location: adicionar.php ");
    exit;
}