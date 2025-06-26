<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="style/menu.css" rel="stylesheet">
</head>
<body>

    <header class="menu">
        <div class="menuTexto">
            <h1>Exercício 1 - POST</h1>
            <p>Formulário gerador de quadrados</p>
        </div>

        <div class="menuBotoes">
            <div class="botoes"><a href="exercicio1.php">Exercício 1 - POST</a></div>
            <div class="botoes"><a href="exercicio2.php">Exercício 2 - GET</a></div>
            <div class="botoes"><a href="exercicio3.php">Exercício 3 - POST/GET</a></div>
        </div>
    </header>

    <div style="width:100px"></div>

    <?php 
    $numQuad = filter_input(INPUT_POST, "nquadrados", FILTER_SANITIZE_SPECIAL_CHARS);
    $corFundo = filter_input(INPUT_POST, "corfundo", FILTER_SANITIZE_SPECIAL_CHARS);
    $alinhamento = filter_input(INPUT_POST, "alinhamento", FILTER_SANITIZE_SPECIAL_CHARS);
    $corTexto = filter_input(INPUT_POST, "cortexto", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<div class='containerQuadrados'>";
    
    for($i = 1; $i < $numQuad + 1; $i++) {
        $tamanho = 30*$i;
        echo "<div class='quadrado' style='width: ".$tamanho."px; height: ".$tamanho."px;'><div>$tamanho</div></div>";
    }

    echo "</div>";

    ?>
</body>

<style>
    <?php if($alinhamento == "horizontal") { ?>
    .containerQuadrados {
        display: flex;
    }
    <?php } ?>

    .quadrado {
        background-color: <?php echo $corFundo; ?>; 
        color: <?php echo $corTexto; ?>;
        margin: 1em;
        border: 2px solid <?php echo $corTexto; ?>;
        display: flex;
        justify-content: center;
        align-items: center;
    }


</style>

</html>