<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        h1 {
            margin-top: .8em;
            margin-left: .8em;
        }
        
        hr {
            margin-left: 1em;
        }

        .row {
            margin-top: 1em;
            margin-bottom: 2em;
        }

        form {
            margin-left: 4em;
        }

        .containerTabuada {
            margin-left: 2em;
        }
    </style>
</head>
<body>
    <h1>Tabuada</h1>
    <hr>

    <form action="">
        <label for="numero">Número: </label>
        <input type="number" id="numero" name="numero">

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </div>

    </form>

    <?php

        $numero = filter_input(INPUT_GET, "numero", FILTER_SANITIZE_SPECIAL_CHARS);

        if(isset($numero)) {
            echo "<hr>";

            echo "<div class='containerTabuada'>";

            echo "<h2>Tabuada do $numero</h2>";

            for($i = 1; $i < 11; $i++) {
                $resultado = $numero * $i;
                echo "<p>$numero x $i = $resultado</p>";
            }

            echo "</div>";
        }
    ?>
</body>
</html>