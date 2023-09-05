<!DOCTYPE html>
<html lang="pt-br">
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

            if(empty($email) || empty($senha)){
                echo "E-mail e senha são obrigatórios.";
            } else {
                echo "<p>E-mail informado: $email <br> Senha informada: $senha</p>";
            }
        }

        else {
            echo "<p>E-mail/Senha inválidos! <br> Tente novamente.</p>";
        }

        echo "<a href='index.php'>Voltar ao Menu</a>";
    ?>
</body>
</html>