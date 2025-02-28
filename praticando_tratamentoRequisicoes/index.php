<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .containerPrincipal {
            padding: 2em 3em;
        }

        .row {
            margin-top: 2em;
        }
    </style>
</head>
<body>
    

    <div class="containerPrincipal">
        <h1>Formulário</h1>
        <hr>

        <div class="container">
            <div class="row">

                    <form action="destino.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label" for="titulo">Título da página:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" aria-describedby="basic-addon1" id="titulo" name="titulo">
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="mb-3">
                                <label class="form-label" for="corpo">Corpo:</label>
                                <div class="input-group">
                                    <textarea name="corpo" id="corpo" class="form-control" ></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="mb-3">
                                <label class="form-label" for="cor_texto">Cor texto:</label>
                                <div class="input-group">
                                    <input type="color" class="form-control" aria-describedby="basic-addon1" id="cor_texto" name="cor_texto">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="mb-3">
                                <label class="form-label" for="imagem">URL de uma imagem:</label>
                                <div class="input-group">
                                    <input type="url" class="form-control" aria-describedby="basic-addon1" id="imagem" name="imagem">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            
                            <div class="mb-3">
                                <label class="form-label" for="link">URL de link:</label>
                                <div class="input-group">
                                    <input type="url" class="form-control" aria-describedby="basic-addon1" id="link" name="link">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="mb-3">
                                <label class="form-label" for="cor_planoFundo">Cor de plano de fundo da página:</label>
                                <div class="input-group">
                                    <input type="color" class="form-control" aria-describedby="basic-addon1" id="cor_planoFundo" name="cor_planoFundo">
                                </div>
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

        </div>
    </div>
</body>
</html>