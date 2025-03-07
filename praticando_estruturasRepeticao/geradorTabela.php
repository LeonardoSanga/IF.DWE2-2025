<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de tabela</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin-left: 4em;
        }

        input {
            margin-right: 2em;
            
        }

        .row {
            margin-top: 1em;
        }
    </style>
</head>
<body>
    <h1>Praticando 4 - Gerador de tabela</h1>
    <hr>

    <form action="geradorTabela-destino.php" method="POST">
        <label for="linhas">Linhas:</label>
        <input type="number" name="linhas" id="linhas">

        <label for="colunas">Colunas:</label>
        <input type="number" name="colunas" id="colunas">

        <label for="estilo">Estilo:</label>
        <select name="estilo" id="estilo">
            <option value="table-primary">table-primary</option>
            <option value="table-sucess">table-sucess</option>
            <option value="table-danger">table-danger</option>
            <option value="table-warning">table-warning</option>
            <option value="table-dark">table-dark</option>
        </select>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </div>
    </form>
</body>
</html>