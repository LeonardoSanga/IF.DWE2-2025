<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>

    <style>
        .link {
            font-size: 1.6em;
            margin-right: 3em;
        }

        .destaque-negativo {
            padding: 4px;
            border: 3px solid red;
            background-color: rgb(248, 143, 143);
        }

        .destaque-positivo {
            padding: 4px;
            border: 3px solid green;
            background-color: rgb(138, 255, 138);
        }

        .retorno {
            font-size: 3em;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Praticando 3 - Números primos</h1>
    <hr>

    <a href="http://localhost/VTP.DWE2-2025/praticando_estruturasRepeticao/numerosPrimos.php?numero=1" class="link">Número 1</a>
    <a href="http://localhost/VTP.DWE2-2025/praticando_estruturasRepeticao/numerosPrimos.php?numero=2" class="link">Número 2</a>
    <a href="http://localhost/VTP.DWE2-2025/praticando_estruturasRepeticao/numerosPrimos.php?numero=3" class="link">Número 3</a>
    <a href="http://localhost/VTP.DWE2-2025/praticando_estruturasRepeticao/numerosPrimos.php?numero=5" class="link">Número 5</a>
    <a href="http://localhost/VTP.DWE2-2025/praticando_estruturasRepeticao/numerosPrimos.php?numero=20" class="link">Número 20</a>
    <a href="http://localhost/VTP.DWE2-2025/praticando_estruturasRepeticao/numerosPrimos.php?numero=32" class="link">Número 32</a>
    <a href="http://localhost/VTP.DWE2-2025/praticando_estruturasRepeticao/numerosPrimos.php?numero=37" class="link">Número 37</a>

    <?php
        $numero = filter_input(INPUT_GET, "numero", FILTER_SANITIZE_SPECIAL_CHARS);

        function ehPrimo($num) {
            if ($num < 2) {
                return false;
            }
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }
        
        function parOuImpar($num) {
            return ($num % 2 == 0) ? "Par" : "Ímpar";
        }

        if(isset($numero)) {
            if(!ehPrimo($numero)) {
                $destaque = "destaque-negativo";
                echo "<p class='retorno'>O número <span class='destaque-negativo'>$numero</span> <span class='destaque-negativo'>não é</span> um número <span class='destaque-negativo'>PRIMO</span></p>";
            } else {
                $destaque = "destaque-positivo";
                echo "<p class='retorno'>O número <span class='destaque-positivo'>$numero</span> <span class='destaque-positivo'>é</span> um número <span class='destaque-positivo'>PRIMO</span></p>";
            }
    
            if(parOuImpar($numero) == "Ímpar") {
                echo "<p class='retorno'>Além disso ele é um número <span class=$destaque>ÍMPAR</span></p>";
            } else {
                echo "<p class='retorno'>Além disso ele é um número <span class=$destaque>PAR</span></p>";
            }
        }
    ?>
</body>
</html>