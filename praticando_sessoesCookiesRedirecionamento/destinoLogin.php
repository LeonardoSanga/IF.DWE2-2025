<?php
session_start();

require 'header.php';
?>

<style>
    .falha {
        padding: 5px;
        margin-bottom: 5px;
        border-radius: 10px;
        background-color: rgb(243, 137, 137);
    }
</style>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Autenticação</h1>
    </div>

    <?php
        $user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
        $pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);

        if($user == "lminguini") {
            if($pass == "senha_da_nasa") {
                $_SESSION["user"] = $user;
                header("Location: index.php");
            } else {
                echo "<div class='falha'>";
                echo "<h2>Falha ao autenticar</h2>";
                echo "<p>A <strong>senha</strong> informada está incorreta.</p>";
                echo "<p>Verifique as informações e tente novamente.</p>";
                unset($_SESSION["user"]);
                echo "</div>";
            }
        } else {
            echo "<div class='falha'>";
            echo "<h2>Falha ao autenticar</h2>";
            echo "<p>O <strong>usuário</strong> não foi encontrado.</p>";
            echo "<p>Verifique as informações e tente novamente.</p>";
            unset($_SESSION["user"]);
            echo "</div>";
        }

        echo "<a class='btn btn-primary ms-5' href='login.php'>Voltar</a>";
    ?>

</div>

<?php
require 'footer.php';
?>