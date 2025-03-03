<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de média</title>

    <style>
        body {
            font-size: 2em;
        }

        input, button {
            font-size: .8em;
        }

        .row {
            margin-bottom: 5px;
        }

        .btn-calcular {
            background-color: green;
            color: white;
        }

        .btn-limpar {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h1>Praticando - Calculadora Média</h1>
    <hr>

    <form action="destino-cal.php" method="POST">
        <div class="row">
            <label for="nota1">Nota 1:</label>
            <input type="number" min="0" max="10" step="0.5" value="0" name="nota1" id="nota1">
        </div>

        <div class="row">
            <label for="nota1">Nota 2:</label>
            <input type="number" min="0" max="10" step="0.5" value="0" name="nota2" id="nota2">
        </div>

        <div class="row">
            <label for="nota1">Nota 3:</label>
            <input type="number" min="0" max="10" step="0.5" value="0"  name="nota3" id="nota3">
        </div>

        <div class="row">
            <button type="submit" class="btn-calcular">Calcular média</button>
            <button type="reset" class="btn-limpar">Limpar</button>
        </div>

    </form>
</body>
</html>