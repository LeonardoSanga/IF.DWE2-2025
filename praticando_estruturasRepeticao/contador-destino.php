<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino Contador</title>
</head>
<body>
    <h1>Contador</h1>
    <hr>

    <?php
        $inicio = filter_input(INPUT_POST, "inicio", FILTER_SANITIZE_SPECIAL_CHARS);
        $final = filter_input(INPUT_POST, "final", FILTER_SANITIZE_SPECIAL_CHARS);
        $incremento = filter_input(INPUT_POST, "incremento", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "<h2>Parâmetros Informados</h2>";

        echo "<p>Início: $inicio</p>";

        echo "<p>Final: $final</p>";

        echo "<p>Início: $inicio</p>";

        if($inicio > $final) {
            for($i = $inicio; $i >= $final; $i -=$incremento) {
                echo "$i ";
            }
        } else {
            for($i = $inicio; $i <= $final; $i +=$incremento) {
                echo "$i ";
            }
        }
    ?>

</body>
</html>