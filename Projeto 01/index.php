<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | TESTES</title>
</head>
<body>

    <h1>
        <?php
            echo "MENU | PHP";
        ?>
    </h1>

    <p>
        <?php
        echo "<a href='index.php'>Principal | </a>";
        echo "<a href='login.php'>Login | </a>";
        echo "<a href='cadastro.php'>Cadastro | </a>";
        echo "<a href='sair.php'>Sair</a>";
        ?>
    </p>

    <p>
        <?php
            echo "<form action='validarLoginPOST.php' method='POST'>";
            echo "<h2>Informe e-mail e senha</h2>";
            echo "E-mail: <input type='text' name='email' required> <br> <br>";
            echo "Senha: <input type='password' name='senha' required>";

        ?>
    </p>

</body>
</html>