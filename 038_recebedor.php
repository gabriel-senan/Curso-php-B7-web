<?php
session_start();

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);


if($nome && $email && $idade) {
    echo 'NOME: ' . $nome . "<br/>";
    echo 'EMAIL: ' . $email . "<br/>";
    echo 'IDADE: ' . $idade;
} else {
    $_SESSION['aviso'] = 'Preencha tudo corretamente!';
    
    header("Location: 038_index.php");
    exit;
}