<?php
include("sessao.php");
require('conexao.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Editar Info</title>
    <link rel="stylesheet" href="cadastro.css">
</head>

<body>
    <?php
    require('conexao.php');
    session_start();
    if (isset($_REQUEST['telefone'])) {
        $telefone = stripslashes($_REQUEST['telefone']);
        $telefone = mysqli_real_escape_string($con, $telefone);
        $sexo = stripslashes($_REQUEST['sexo']);
        $sexo = mysqli_real_escape_string($con, $sexo);
        $query = "UPDATE `new_table` SET Telefone = '$telefone', Sexo = '$sexo' WHERE email= '" . $_SESSION['email'] . "'";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo '<script>alert("Conta editada!")</script>';
            header("Location: infoUsuario.php");

        } else {
            echo '<script>alert("Erro na edicao!")</script>';
        }
    } else {
    ?>
    <ul>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="principal.php">Inicio</a></li>
        <li><a href="cadastroItem.php">Cadastrar</a></li>
        <li><a href="devolverItem.php">Devolver</a></li>
        <li><a href="itensPendentes.php">Pendentes</a></li>
        <li><a href="itensUsuario.php">Seus Itens</a></li>
        <li><a href="infoUsuario.php">Usuario</a></li>
    </ul>
    <form name="form5" action="editarInfo.php" method="post">
        <div class="cadastro">
            <h1>Editar</h1>
            <div class="cadastroUsuario">
                <label>Telefone</label>
                <input class="login-input" type="text" id="telefone" name="telefone"
                    placeholder="Digite seu novo telefone"></input>
            </div>
            <div class="cadastroUsuario">
                <label>Sexo</label>
            </div>
            <input type="radio" name="sexo" value="Masculino">Masculino</input>
            <input type="radio" name="sexo" value="Feminino">Feminino</input>
            <p>
                <input class="button" type="submit" value="Update" onclick="window.location.href='infoUsuario.php'">
                <input class="button" type="button" value="Voltar" onclick="window.location.href='infoUsuario.php'">
            </p>
        </div>
    </form>
    <?php
    }
    ?>
</body>

</html>