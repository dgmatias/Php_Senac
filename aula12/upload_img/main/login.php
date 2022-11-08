<?php 

require 'config.php';

include 'head.php';

session_start();

ob_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h1> Login </h1>
    
    <div>
        
        <form method="post" action="login_action.php">
    
            <label for="">
                Email: <br>
                <input type="email" name="email">
            </label> <br>
    
            <label for="">
                Senha: <br>
                <input type="password" name="senha">
            </label> <br>
    
            <input type="submit" value="adicionar">
        </form>
    
    </div>
    
    <div> <a href="cadastrar.php"> Ainda não tem uma conta ? </a> </div>

</body>
</html>