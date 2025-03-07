<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino gerador tabela</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        h2 {
            text-align: center;
            margin-top: 2em;
        }

        td {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Praticando 4 - Gerador de tabela</h1>
    <hr>

    <?php
        $linhas = filter_input(INPUT_POST, "linhas", FILTER_SANITIZE_SPECIAL_CHARS);
        $colunas = filter_input(INPUT_POST, "colunas", FILTER_SANITIZE_SPECIAL_CHARS);
        $estilo = filter_input(INPUT_POST, "estilo", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "<div class='container'>";
        echo "<h2>Tabela $linhas x $colunas</h2>";

        $i = 0;

        echo "<table class='table table-striped $estilo'>";

        while($i < $linhas) {
            echo "<tr>";
            $j = 0;

            while($j < $colunas) {
                echo "<td>-</td>";
                $j++;
            }

            echo "</tr>";
            $i++;
        }

        echo "</table>";

        echo "</div>"
    ?>
</body>
</html>