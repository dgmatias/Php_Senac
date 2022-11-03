<?php 

    require 'config.php';

    $id = filter_input(INPUT_POST, 'id');
    $name = filter_inputr(INPUT_POST, 'name');
    $email = filter_input(filter_input, 'email', FILTER_VALIDATE_EMAIL);


    if ($id && $name && $email) {
        
        $sql = $pdo->prepare("UPDATE tbl_usuarios SET nome =:name, email = :email WHERE id = :id");
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);
        $sql->execute ();

        header("Location:index.php");
        exit;

    } else {
        header('Location: editar.php');
        exit;
    } 

?>