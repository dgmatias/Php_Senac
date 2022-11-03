<?php 

    require 'config.php';
    require 'head.php';

    $info = [];

    $id = filter_input(INPUT_GET, 'id');

    if ($id) {
        $sql = $pdo->prepare("SELECT * FROM tbl_usuarios Where id = :id");
        $sql-> bindValue(':id', $id);
        $sql-> execute();
    
        if ($sql-> rowCount() > 0) {
            $info = $sql->fetch(PDO::FETCH_ASSOC);
        } else {
            header("Location: index.php");
            exit;
        }

    } else {
        header ("Location: index.php");
        exit;
    }

?>

<div class="container">

    <h1>Editar Ùsuario</h1>

    <form action="editar_action.php" method="post">
        <input type="hiden" name="id" value="<?=$info['id'];?>">
    <div class="mb-3">
        <label for="" class="form-label">
            Nome: </br>
            <input type="text" name="name" value="<?=$info['nome'];?>" class="form-control">
        </label>
    </div>
    <div>
        <label for="" class="form-label">
            E-mail: </br>
            <input type="email" name="email" value="<?=$info['mail'];?>" class="form-control">
        </label>
    </div>

    <input type="submit" value="Salvar" class="btn btn-primary">
    </form>

</div>