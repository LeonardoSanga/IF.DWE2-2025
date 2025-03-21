<?php

use Claudsonm\CepPromise\CepPromise;

require 'vendor/autoload.php';

$address = null;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cep'])) {
    $cep = preg_replace('/\D/', '', $_POST['cep']); 

    try {
        $address = CepPromise::fetch($cep);
    } catch (Exception $e) {
        $error = "Erro ao buscar o CEP: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <style>
        .btnContainer {
            margin-top:10px;
        }

        .labelCep {
            display: inline-block;
        }

        .destaqueVerde {
            padding: 10px;
            border-radius: 10px;
            background-color: rgb(149, 255, 149);
            border: 1px solid green;
        }

        .destaqueVermelho {
            padding: 10px;
            border-radius: 10px;
            background-color: rgb(255, 118, 118);
            border: 1px solid red;
        }

        .titulo{
            font-size: 3em;
            text-align: center;
        }

        .tituloRetorno {
            font-size: 2em;
        }
        
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    
        <h1 class="titulo">Praticando Composer - Busca CEP com Composer</h1>
        <hr>

        <div class="container">

        <form action="index.php" method="POST">
            <div class="row">
                        
                <label class="form-label labelCep" for="cep">CEP:</label>
                <div class="col-4">
                    
                    <input type="text" class="form-control" aria-describedby="basic-addon1" id="cep" name="cep">
                </div>

                <div class="col-2 btnContainer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar</button>
                </div>
            </div>

        </form>

        <?php if ($address): ?>
            <div class="mt-4 destaqueVerde">
                <h4 class="tituloRetorno">CEP: <?php echo substr($address->zipCode, 0, 2) . '.' . substr($address->zipCode, 2, 3) . '-' . substr($address->zipCode, 5, 3); ?></h4>
                <p><strong>Rua:</strong> <?php echo $address->street; ?></p>
                <p><strong>Bairro:</strong> <?php echo $address->district; ?></p>
                <p><strong>Cidade:</strong> <?php echo $address->city; ?></p>
                <p><strong>Estado:</strong> <?php echo $address->state; ?></p>
            </div>
        <?php elseif (isset($error)): ?>
            <div class="mt-4 destaqueVermelho">
                <h4 class="tituloRetorno">CEP: <?php echo $cep; ?></h4>
                <p>Detalhes do erro:</p>
                <ul>
                    <li><div class="mt-4"><?php echo $error; ?></div></li>
                </ul>
            </div>

        <?php endif; ?>
    </div>
</body>
</html>