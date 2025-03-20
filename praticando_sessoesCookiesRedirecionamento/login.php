<?php
session_start();

if(isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
    $_SESSION["erro"] = "Usuário já está autenticado.";
    header("Location: index.php");
}

require 'header.php';
?>

<style>
    .btnContainer {
        margin-top: 10px;
    }
</style>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Antenticação</h1>
    </div>

    <form action="destinoLogin.php" method="POST">
        <div class="row justify-content-center">
            <div class="col-4">
                <label class="form-label" for="user">Usuário:</label>
                <div class="input-group">
                <input type="text" class="form-control" aria-describedby="basic-addon1" id="user" name="user">
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-4">
                <label class="form-label" for="pass">Senha:</label>
                <div class="input-group">
                <input type="password" class="form-control" aria-describedby="basic-addon1" id="pass" name="pass">
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-center btnContainer">
            <div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </div>

    
     <form>

</div>

<?php
require 'footer.php';
?>