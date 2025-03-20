<?php
session_start();

if(!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    $_SESSION["erro"] = "Você está tentando acessar conteúdo restrito";
    header("Location: index.php");
}

require 'header.php';
?>

<style>
    .infoContainer {
        font-size: 1.5em;
    }
</style>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Perfil</h1>
    </div>

    <div class="infoContainer">

        <p>Nome: <strong>Leonardo Minguini Sanga</strong></p>
        <p>E-mail: <strong>leonardosanga19@gmail.com</strong></p>
        <p>Telefone: <strong>(17) 99748-5286</strong></p>
        <p>Endereço: <strong>Rua Santa Adélia</strong></p>
        <p>Cidade: <strong>Fernandópolis</strong></p>
        <p>Estado: <strong>São Paulo</strong></p>

    </div>

</div>

<?php
require 'footer.php';
?>