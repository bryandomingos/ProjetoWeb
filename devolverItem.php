<?php
include("sessao.php");
require('conexao.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Devolução</title>
    <link rel="stylesheet" href="cadastro.css">
</head>

<body>
    <?php
    if (isset($_POST['nomeItem'])) {

        $item = stripslashes($_REQUEST['nomeItem']);
        $item = mysqli_real_escape_string($con, $item);
        $senha = stripslashes($_REQUEST['senha']);
        $senha = mysqli_real_escape_string($con, $senha);
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y-m-d H:i:s');


        $query = "SELECT * FROM `new_table`, `new_table2` WHERE item='$item' AND
        senha='" . $senha . "'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['nomeItem'] = $item;
            $devolvido = 1;
            $query = "UPDATE `new_table2` SET devolvido = '$devolvido', data2 = '$data' WHERE item='$item'";
            $result = mysqli_query($con, $query);
            if ($result) {
                echo '<script>alert("Item devolvido com sucesso!")</script>';
                header("Location: principal.php");

            } else {
                echo '<script>alert("Erro na devolucao!")</script>';
            }

            header("Location: principal.php");
        } else {
            echo "<div class='form'>
                  <h3>Item inexistente ou senha incorreta.</h3><br/>
                  <p class='link'>Clique <a href='devolverItem.php'>aqui</a> para tentar novamente.</p>
                  </div>";
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
    <form name="form3" action="devolverItem.php" method="post" autocomplete="off">
        <div class="cadastro">
            <h1>Devolução</h1>
            <div class="cadastroUsuario">
                <label>Nome do Item</label>
                <input class="login-input" type="text" id="nomeItem" name="nomeItem" placeholder="Digite o nome do item"
                    required="" oninvalid="this.setCustomValidity('Campo obrigatórios.')"></input>
            </div>
            <div class="cadastroUsuario">
                <label>Senha</label>
                <input class="login-input" type="password" id="senha" name="senha" placeholder="Senha"
                    placeholder="Digite uma datadev$datadev"></input>
            </div>
            <input class="button" type="submit" value="Devolver">
            <div class="space"></div>
            <input class="button2" type="button" value="Voltar" onclick="window.location.href='principal.php'">
        </div>
    </form>
    <script src="cadastro.js"></script>
    <?php
    }
    ?>
</body>

</html>