<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-MAIL</title>
</head>
<body>

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
            echo "<form action='validarLoginPOST2.php' method='POST'>";

            echo "<h2>Informe E-mail e senha</h2>";

            echo "E-mail: <input type='email' name='email'> <br> <br>";

            echo "Senha: <input type='password' name='senha'> <br> <br> ";

            echo "<input type='submit' value='Enviar'>";

            echo "<input type='button' value='Cadastrar'>"; 

            echo "<input type='button' value='Cancelar'>";

            echo "</form>";
        ?>
    </p>

</body>
</html>