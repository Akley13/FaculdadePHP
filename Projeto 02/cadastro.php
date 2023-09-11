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
            echo "MENU | PHP | CADASTRO <hr>";
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

    <form action="validarCadastro.php" method="post">
        Nome: &nbsp;<input type="text" name="nome"> <br><br>
        E-mail: <input type="email" name="email"> <br>
        &nbsp;Senha: <input type="password" name="senha"> 

        <br><br>

        Gênero: <input type="radio" name="genero" value="masculino">Masculino
                <input type="radio" name="genero" value="feminino">Feminino

                <br><br>

        Estado: <input type="radio" name="uf" value="GO">GO
                <input type="radio" name="uf" value="MT">MT
                <input type="radio" name="uf" value="MS">MS

                <br><br>

        Lista:  <select name="bancoDados">
                    <option value="mySQL">MySQL</option>
                    <option value="mySQL">MongoDB</option>
                    <option value="mySQL">PostgreSQL</option>
                </select>

                <br><br>

        <input type="submit" value="Enviar">
        <input type="button" value="Cancelar">
    </form>

</body>
</html>