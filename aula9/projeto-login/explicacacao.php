<?php

require 'head.php';

$senha = '1234';

$hash = password_hash ($senha, PASSWORD_DEFAULT);

echo "sua senha é: $senha" . "<br/>";
echo "hash é $hash" . "<br/>"; 

$hash_verify = '$2y$10$d1XHoLj17wplbZebPKQy8.W5AtsK57VQAzx3op45R.zJueTOJ7wZK';

if(password_verify($senha, $hash_verify)) {
    echo 'senha correta';
} else {
    echo 'senha incorreta';
}