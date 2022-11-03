<?php 

    require 'config.php';

    $id = filter_input(input_get, 'id');

    if ($id) {
        $sql= $pdo->prepare("DELETE FROM tbl_usuarios WHERE id = :id");
        $sql-> bindValue(':id', $id);
        $sql->execute ();
    }
    
    header ('location: index.php');
    exit;
?>