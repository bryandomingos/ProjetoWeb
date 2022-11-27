<?php
include("sessao.php");
require('conexao.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Item</title>
    <link rel="stylesheet" href="cadastro.css">
</head>

<body>
    <?php
    if (isset($_REQUEST['nomeItem'])) {

        $result1 = mysqli_query($con, "SELECT usuario FROM new_table WHERE email= '" . $_SESSION['email'] . "'");
        while ($row = mysqli_fetch_array($result1)) {
            $usuario = $row['usuario'];
        }

        $result2 = mysqli_query($con, "SELECT email FROM new_table WHERE email= '" . $_SESSION['email'] . "'");
        while ($row2 = mysqli_fetch_array($result2)) {
            $email = $row2['email'];
        }

        $item = stripslashes($_REQUEST['nomeItem']);
        $item = mysqli_real_escape_string($con, $item);
        $datadev = stripslashes($_REQUEST['datadev$datadev']);
        $datadev = mysqli_real_escape_string($con, $datadev);
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y-m-d H:i:s');
        $query = "INSERT into `new_table2` (usuario, item, data3, data2, email)
        VALUES ('$usuario', '$item', '$data', '$datadev', '$email')";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo '<script>alert("Conta cadastrada com sucesso!")</script>';
            header("Location: principal.php");

        } else {
            echo '<script>alert("Erro no cadastro!")</script>';
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
    <form name="form3" action="cadastroItem.php" method="post" autocomplete="off">
        <div class="cadastro">
            <h1>Cadastro</h1>
            <div class="cadastroUsuario">
                <label>Nome do Item</label>
                <input class="login-input" type="text" id="nomeItem" name="nomeItem" placeholder="Digite o nome do item"
                    required="" oninvalid="this.setCustomValidity('Campo obrigatórios.')"></input>
            </div>
            <div class="cadastroUsuario">
                <label>Data de devolucao</label>
                <input class="login-input" type="date" id="datadev$datadev" name="datadev$datadev"
                    placeholder="Digite uma datadev$datadev"></input>
            </div>
            <input class="button" type="submit" value="Cadastrar">
            <div class="space"></div>
            <input class="button2" type="button" value="Voltar" onclick="history.back()">
        </div>
    </form>
    <script src="cadastro.js"></script>
    <?php
    }
    ?>
</body>

</html>