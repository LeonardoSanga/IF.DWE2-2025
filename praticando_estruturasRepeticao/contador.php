<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
         h1 {
            margin-top: .8em;
            margin-left: .8em;
        }
        
        hr {
            margin-left: 1em;
        }

        .contadorContainer {
            margin-left: 4em;
        }

    </style>
</head>
<body>
    <h1>Contador</h1>
    <hr>
                            
    <div class="contadorContainer">
        <form action="contador-destino.php" method="POST">
            <div class="mb-3">
                <label class="form-label" for="inicio">Início:</label>
                    <div class="input-group">
                        <input type="number" id="inicio" name="inicio"> 
                    </div>
                </div>

            <div class="mb-3">
                <label class="form-label" for="final">Final:</label>
                    <div class="input-group">
                    <input type="number" id="final" name="final"> 
                    </div>
                </div>


            <div class="mb-3">
                <label class="form-label" for="incremento">Incremento:</label>
                    <div class="input-group">
                        <input type="number" id="incremento" name="incremento"> 
                    </div>
                </div>

            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>