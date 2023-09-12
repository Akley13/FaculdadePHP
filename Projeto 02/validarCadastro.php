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

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obter dados do formulário
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $genero = $_POST["genero"];
            $uf = $_POST["uf"];
            $bancoDados = $_POST["bancoDados"];
            echo "<p>Dados recebidos com sucesso!</p>";
            echo "<p>Nome: $nome</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Senha: $senha</p>";
            echo "<p>Genero: $genero</p>";
            echo "<p>UF: $uf</p>";
            echo "<p>Banco Dados: $bancoDados</p>";
            }
        else {
            echo "<p>Dados para Cadastro obrigatórios! Tente novamente.</p>";
            }
    ?>

</body>
