<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/menu.css" rel="stylesheet">
</head>
<body>
    <header class="menu">
        <div class="menuTexto">
            <h1>Exercício 3 - POST/GET</h1>
            <p>Formulário gerador de posts</p>
        </div>

        <div class="menuBotoes">
            <div class="botoes"><a href="exercicio1.php">Exercício 1 - POST</a></div>
            <div class="botoes"><a href="exercicio2.php">Exercício 2 - GET</a></div>
            <div class="botoes"><a href="exercicio3.php">Exercício 3 - POST/GET</a></div>
        </div>
    </header>

    <?php
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
        $imagem = filter_input(INPUT_POST, "imagem", FILTER_SANITIZE_SPECIAL_CHARS);
        $posicaoTexto = filter_input(INPUT_POST, "posicao", FILTER_SANITIZE_SPECIAL_CHARS);
        $cor_planoFundo = filter_input(INPUT_POST, "cor_planoFundo", FILTER_SANITIZE_SPECIAL_CHARS);

        $dataHora = date("d/m/o - H:i:s");

        echo "<div class='container'>";

        echo "<h1>$titulo</h1>";

        echo "<p>data e hora: $dataHora</p>";

        echo "<hr>";

        echo "<div class='corpoPag'><img src='$imagem'><p>$corpo</p></div>";

        echo "<div class='clearFloat'></div>";

        echo "</div>";
    ?>

    <style>

        <?php if($posicaoTexto == "esquerda") {?>
        img {
            float: left;
            margin-right:10px;
        }
        <?php } else {?>
        img {
            float: right;
            margin-left:10px;
        }
        <?php } ?> 

        .container {
            padding: 30px 10px;
            background-color: <?php echo $cor_planoFundo; ?>;
            border-radius: 10px;
        }

        img {
            width: 200px;
        }

    .clearFloat {
        clear: both;
    }
        
    </style>
</body>
</html>