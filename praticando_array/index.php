<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de interesses</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .row {
            margin-top: 1em;
        }

        form {
            width: 60vw;
        }
    </style>
</head>
<body>
    <h1>Formulário</h1>
    <hr>

    <p>Escolha alguns interesses:</p>
    

    <form action="destino.php" method="POST">

        <div class="row">
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Esportes"> Esportes</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Smartphones"> Smartphones</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Vestuário"> Vestuário</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Calçados"> Calçados</div>
        </div>

        <div class="row">
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Futebol"> Futebol</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Computadores e Hadware"> Computadores e Hadware</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Perfumes"> Perfumes</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Hotéis"> Hotéis</div>
        </div>

        <div class="row">
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Basquete"> Basquete</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Desktop gamers"> Desktop gamers</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Economia"> Economia</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Pousadas"> Pousadas</div>
        </div>

        <div class="row">
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Tênis"> Tênis</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Notebook"> Notebook</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Comidas"> Comidas</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Cinema"> Cinema</div>
        </div>

        <div class="row">
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Taekwondo"> Taekwondo</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Veículos"> Veículos</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Bebidas"> Bebidas</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Filmes"> Filmes</div>
        </div>

        <div class="row">
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Tecnologia"> Tecnologia</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Escritório"> Escritório</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Imóveis"> Imóveis</div>
            <div class="col-3"><input type="checkbox" name="checkbox[]" value="Séries"> Séries</div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </div>
    </form>
</body>
</html>