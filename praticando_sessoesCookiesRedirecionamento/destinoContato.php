<?php
session_start();

require 'header.php';
?>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário para contato</h1>
    </div>

    <?php
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);
        $dataHora = date("d/m/o - H:i:s");
        $dataMicroS = date("d_m_Y_H_i_s");

        echo "<p>Nome informado: $nome</p>";

        echo "<p>Email: $email</p>";

        echo "<p>Mensagem: $mensagem</p>";

        echo "<p>Data: $dataHora</p>";

        echo "<a class='btn btn-primary ms-5' href='contato.php'>Voltar</a>";

        $file_name = "contatos/Contanto_" . $dataMicroS . "_" . time() . ".txt";
        $content = "Contato via site:
        
        Data: $dataHora
        
        Nome: $nome
        Email: $email
        Mensagem: $mensagem";

        if(!$fp = fopen($file_name, 'w+')) {
            echo "<p>Erro ao abrir o $file_name</p>";
            exit;
        }

        if(fwrite($fp, $content) === FALSE) {
            echo "<p>Erro ao escrever no arquivo $file_name</p>";
            exit;
        }

        echo "<br><br><h2>Retorno</h2><p>Sucesso, escrito ($content) no arquivo ($file_name)</p>";
        fclose($fp);


    ?>

</div>

<?php
require 'footer.php';
?>