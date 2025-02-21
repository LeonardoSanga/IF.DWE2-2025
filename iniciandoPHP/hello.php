<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World PHP</title>
</head>
<body>
    <h1>My First PHP page</h1>

    <p>
        <?php
            echo "<p>Hello Wolrd!</p>";

            $nome = "Leonardo";
            $data = date("d/m/Y");
            $hora = date("h:i");

            echo "<p>Olá, meu nome é $nome. Hoje é dia $data e agora são $hora";
        ?>
    </p>
</body>
</html>