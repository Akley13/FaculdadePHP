<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU | PHP</title>
</head>
<body>

    <h1>
        <?php
            echo "MENU | PHP <hr>";
        ?>
    </h1>

    <p>
        <?php
        echo "<a href='index.php'>Principal | </a>";
        echo "<a href='cadastro.php'>Cadastro | </a>";
        echo "<a href='login.php'>Login | </a>";
        echo "<a href='sair.php'>Sair</a>";
        ?>
    </p>

</body>
</html>