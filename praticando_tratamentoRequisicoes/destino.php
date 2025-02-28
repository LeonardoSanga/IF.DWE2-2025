<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
</head>
<body>
    <?php
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
        $cor_texto = filter_input(INPUT_POST, "cor_texto", FILTER_SANITIZE_SPECIAL_CHARS);
        $imagem = filter_input(INPUT_POST, "imagem", FILTER_SANITIZE_SPECIAL_CHARS);
        $link = filter_input(INPUT_POST, "link", FILTER_SANITIZE_SPECIAL_CHARS);
        $cor_planoFundo = filter_input(INPUT_POST, "cor_planoFundo", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "<div class='container'>";

        echo "<h1>$titulo</h1>";

        echo "<hr>";

        echo "<p>$corpo</p>";

        echo "<img src='$imagem'>";

        echo "<p><a href='$link'>$link</a></p>";

        echo "</div>";
    ?>

    <style>

        hr {
            color: <?php echo $cor_texto; ?>;
        }

        .container {
            padding: 30px 10px;
        }

        body{
            background-color: <?php echo $cor_planoFundo; ?>;
            color: <?php echo $cor_texto; ?>;
        }
        
    </style>
</body>
</html>