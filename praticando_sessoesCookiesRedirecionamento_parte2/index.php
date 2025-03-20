<?php
// Definir cookies apenas se os parâmetros GET forem passados
if (!empty($_GET["nome"])) {
    setcookie("nome", $_GET["nome"], time() + 3600); // 1 hora
}

if (!empty($_GET["email"])) {
    setcookie("email", $_GET["email"], time() + 3600);
}

if (!empty($_GET["cor"])) {
    setcookie("cor", $_GET["cor"], time() + 3600);
}

// Recuperar valores dos cookies se os parâmetros GET não existirem
$nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS) ?? $_COOKIE["nome"] ?? "";
$email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL) ?? $_COOKIE["email"] ?? "";
$cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS) ?? $_COOKIE["cor"] ?? "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>

    <style>
        .container {
            width: 60vw;
            margin: auto;
            display: flex;
            justify-content: space-between;
        }

        a {
            width: 300px;
            height: 200px;
            
        }


        .quadrado {
            width: 300px;
            height: 200px;
            
        }

        .red {
            background-color: red;
        }

        .green {
            background-color: green;
        }

        .blue {
            background-color: blue;
        }
    </style>
</head>
<body>
    <h1>Destino GET</h1>

    <?php
        if(!empty($nome) && !empty($email)) {
            echo "<p>Nome informado: $nome<br>Email: $email</p>";
        }

    ?>

    <br>

    <p>
        <a href="http://localhost/VTP.DWE2-2025/praticando_sessoesCookiesRedirecionamento_parte2/index.php?nome=Leonardo&email=leonardo@gmail.com&cor=<?php echo $cor?>">nome = Leonardo | email = leonardo@gmail.com</a>
    </p>

    <p>
        <a href="http://localhost/VTP.DWE2-2025/praticando_sessoesCookiesRedirecionamento_parte2/index.php?nome=Otair&email=otair@gmail.com&cor=<?php echo $cor?>">nome = Otair | email = otair@gmail.com</a>
    </p>

    <p>
        <a href="http://localhost/VTP.DWE2-2025/praticando_sessoesCookiesRedirecionamento_parte2/index.php">Limpar tudo</a>
    </p>

    <div class="container">
        <a class="quadrado red" href="http://localhost/VTP.DWE2-2025/praticando_sessoesCookiesRedirecionamento_parte2/index.php?nome=<?php echo $nome?>&email=<?php echo $email?>&cor=red"></a>
        <a class="quadrado green" href="http://localhost/VTP.DWE2-2025/praticando_sessoesCookiesRedirecionamento_parte2/index.php?nome=<?php echo $nome?>&email=<?php echo $email?>&cor=green"></a>
        <a class="quadrado blue" href="http://localhost/VTP.DWE2-2025/praticando_sessoesCookiesRedirecionamento_parte2/index.php?nome=<?php echo $nome?>&email=<?php echo $email?>&cor=blue"></a>
    </div>

    <style>
        body {
            background-color: <?php echo $cor; ?>;
        }
    </style>

</body>
</html>