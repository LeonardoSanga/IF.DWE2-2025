<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>

    <style>
        .requisicaoContainer {
            color: rgb(231, 79, 104);
            border: 2px solid green;
        }
    </style>
</head>
<body>
    <h1>Destino</h1>
    <hr>

    <h2>Dados da requisição</h2>

    
    <?php 
        if(isset($_POST['checkbox'])) {
            echo "<div class='requisicaoContainer'>";
            $selecionados = $_POST['checkbox'];

            echo "<pre>"; // Formata a saída para melhor leitura
            var_dump($_POST);
            echo "</pre>";

                //echo "Você selecionou os seguintes interesses:<br>";
                //foreach ($selecionados as $interesse) {
                //    echo "- " . htmlspecialchars($interesse) . "<br>";
                //}

            echo "</div>";

            sort($selecionados);

            echo "<h2>Interesses selecionados (em ordem alfabética):</h2>";

            echo "<ul>";

            for($i = 0; $i < count($selecionados); $i++) {
                if($i ===  3) {
                    echo "<li>...</li>";
                    break;
                }

                echo "<li>$selecionados[$i]</li>";
            }

            echo "</ul>";
        } else {
            echo "<p>Nenhum interesse selecionado</p>";
        }
    ?>
</body>
</html>