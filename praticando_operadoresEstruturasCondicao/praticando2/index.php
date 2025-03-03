<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>

    <style>
        .container {
            display: flex;
            justify-content: space-between;
            margin: 30px 60px;
        }

        img {
            width: 20vw;
            height: 15vw;
        }
    </style>
</head>
<body>
    <h1>Praticando 3 - Animais</h1>
    <hr>

    <?php
        $animal = filter_input(INPUT_GET, "animal", FILTER_SANITIZE_SPECIAL_CHARS);
        $familia = filter_input(INPUT_GET, "familia", FILTER_SANITIZE_SPECIAL_CHARS);
        $classe = filter_input(INPUT_GET, "classe", FILTER_SANITIZE_SPECIAL_CHARS);
        $animaisClicados = filter_input(INPUT_GET, 'animaisClicados', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

        if (!empty($animal)) {
            $animaisClicados[] = $animal;
        }
        
        $queryAnimaisClicados = '';
        if (!empty($animaisClicados)) {
            for ($i = 0; $i < count($animaisClicados); $i++) {
                $queryAnimaisClicados .= '&animaisClicados[]=' . urlencode($animaisClicados[$i]);
            }
        }

    ?>

    <div class="container">
        <a href="http://localhost/VTP.DWE2-2025/praticando_operadoresEstruturasCondicao/praticando2?animal=gato&classe=mamífero&familia=felídeos&animaisClicados=<?php echo $queryAnimaisClicados ?>" class="<?php echo ($animal == 'gato') ? 'selecionado' : '' ?>"><img src="imagens/gato.jpg" alt=""></a>
        <a href="http://localhost/VTP.DWE2-2025/praticando_operadoresEstruturasCondicao/praticando2?animal=cachorro&classe=mamífero&familia=canídeos&animaisClicados=<?php echo $queryAnimaisClicados ?>" class="<?php echo ($animal == 'cachorro') ? 'selecionado' : '' ?>"><img src="imagens/cachorro.jpg" alt=""></a>
        <a href="http://localhost/VTP.DWE2-2025/praticando_operadoresEstruturasCondicao/praticando2?animal=hamster&classe=mamífero&familia=cricetinae&animaisClicados=<?php echo $queryAnimaisClicados ?>" class="<?php echo ($animal == 'hamster') ? 'selecionado' : '' ?>"><img src="imagens/hamster.jpg" alt=""></a>
        <a href="http://localhost/VTP.DWE2-2025/praticando_operadoresEstruturasCondicao/praticando2?animal=lagartixa&classe=réptil&familia=gekkonidae&animaisClicados=<?php echo $queryAnimaisClicados ?>" class="<?php echo ($animal == 'lagartixa') ? 'selecionado' : '' ?>"><img src="imagens/lagartixa.jpg" alt=""></a>
    </div>


    <?php 
        if(!empty($animal)) {
            echo "<p>Você clicou no <strong>$animal</strong></p>";
            echo "<p>O $animal é um $classe da família dos $familia</p>";

            if(count($animaisClicados) > 1) {
                echo "<p><strong>Últimos clicados</strong></p>";
                for ($i = 0; $i < count($animaisClicados) - 1; $i++) {
                    echo "<p>" . htmlspecialchars($animaisClicados[$i]) . "</p>";
                }
            }

            echo "<p><a href='http://localhost/VTP.DWE2-2025/praticando_operadoresEstruturasCondicao/praticando2/'>Limpar tudo</a></p>";
        }
    ?>
    
    <style>
        .selecionado {
            border: 3px solid red;
        }
    </style>
        
    

</body>
</html>