<?php 

include 'head.php';

require 'config.php';

session_start ();

$id = $_SESSION['id'];
$sql = $pdo->query("SELECT * FROM usuario where id = $id");
$banco = $sql->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Index </title>
</head>
<body>
    <div class="avatar">
        <img src="img/download.png" alt="">
    </div>
    <div class="form-avatar">
    <h1> Be3m vindo, <?php echo $_SESSION['nome'] ?> </h1>

        <form action="recebedor.php" method="post" enctype="multipart/form-data">
            <input type="file" name="arquivo"><br>
            <input type="submit" value="Enviar">
        </form>

    </div>
</body>
</html>