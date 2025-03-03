<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <style>
        body {
            font-size: 2em;
        }

        .destaque-apr {
            color: green;
            text-decoration: underline;
        }

        .destaque-rec {
            color: yellow;
            text-decoration: underline;
        }

        .destaque-rep {
            color: red;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Praticando - Calculadora média</h1>
    <hr>

    <?php
        $nota1 = filter_input(INPUT_POST, "nota1", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $nota2 = filter_input(INPUT_POST, "nota2", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $nota3 = filter_input(INPUT_POST, "nota3", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        $media = ($nota1 + $nota2 + $nota3) / 3;

        echo "<p>Um aluno com as notas $nota1, $nota2 e $nota3 tem uma média igual a $media</p>";

        if($media >= 6) {
            echo "<p>Com essa média o aluno está <span class='destaque-apr'>APROVADO</span></p>";
        } elseif ($media >= 4) {
            echo "<p>Com essa média o aluno está <span class='destaque-rec'>DE RECUPERAÇÃO</span></p>";
        } else {
            echo "<p>Com essa média o aluno está <span class='destaque-rep'>REPROVADO</span></p>";
        }
    ?>


</body>
</html>