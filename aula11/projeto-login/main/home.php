<?php 

session_start();

require 'config.php';

require 'head.php';

if (!isset($_SESSION['id'])) {
    header ("Location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div> <h1>Bem vindo <?php echo $_SESSION ['nome'] ?></h1> </div> <br>

    <div> <button> <a href="editar.php"> Editar </a> </button> </div> <br>

    <div> <a href="logout.php"> Logout </a> </div>

</body>
</html>