<?php

$dados = [];

$campos = ["nome", "telefone", "email", "cpf", "dataNasc", "cep", "endereco", "cidade"];

foreach ($campos as $campo) {
    if (isset($_COOKIE[$campo])) {
        $dados[$campo] = $_COOKIE[$campo];
    }
}

header('Content-Type: application/json');
echo json_encode($dados);
?>