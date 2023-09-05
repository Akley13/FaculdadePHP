<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
        <?php
            echo "Menu e Variáveis PHP<br>";
        ?>
    </h1>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obter dados do formulário
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            echo "<p>E-mail informado: $email <br> Senha informada: $senha</p>";
            }
        else {
            echo "<p>E-mail/Senha inválidos! Tente novamente.</p>";
            }
        ?>
    ?>
</body>
</html>