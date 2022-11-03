<?php

date_default_timezone_set('America/Sao_Paulo');

$ano = strftime("%Y");

$mes = date("t");

function mensagem () {

    $horas = date("H");
    $minutos = date ("i");

    if ($horas >= 18) {
        echo (" Boa noite, agora são  $horas horas e $minutos minutos ");
    }else if ($horas >= 12) {
        echo ("Boa tarde, agora são $horas horas e $minutos minutos");
    }else {
        echo ("Bom dia, agora são $horas horas e $minutos minutos");
    }

}

function calendario () {

    for ($dia = 1; $dia <= 31; $dia++) {
        echo "$dia ";
        if ($dia === 7 or $dia === 14 or $dia === 21 or $dia === 28) {
            echo "<br>";
        }

    }

}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
</head>
<body>
    
    <h1> Calendário </h1>

    <h2> Estamos em  <?php echo $ano ?> </h2>

    <p> 
        
        <?php  mensagem () ?>
    
    </p>

    <table> <?php calendario ( ) ?> </table>





    <p> copyright by <a  href="https://github.com/dgmatias/Projetos-Academicos/tree/main/Senac/Projeto-Calend%C3%A1rio"> dgmatias </a>  </p>


</body>
</html>
