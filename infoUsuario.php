<?php
include("sessao.php");
require('conexao.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Usuario</title>
    <link rel="stylesheet" href="cadastro.css">
</head>

<body>
    <?php
    $query = "SELECT * FROM `new_table`";
    if ($mysqli_query = mysqli_query($con, $query)) {
        while ($mysqli_row = mysqli_fetch_assoc($mysqli_query)) {
            $result1 = mysqli_query($con, "SELECT * FROM new_table WHERE email= '" . $_SESSION['email'] . "'");
            while ($row = mysqli_fetch_array($result1)) {
                $usuario = $row['usuario'];
                $telefone = $row['Telefone'];
                $sexo = $row['Sexo'];
            }
        }
    }
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
    <div class="cadastro">
        <h1>
            <?php echo $usuario ?>
        </h1>
        <p>
            E-mail:
            <?php echo $_SESSION['email'] ?>
        </p>
        <p>
            Telefone:
            <?php echo $telefone ?>
        </p>
        <p>
            Sexo:
            <?php echo $sexo ?>
        </p>
        <p>
            <input class="button" type="button" value="Editar" onclick="window.location.href='editarInfo.php'">
            <input class="button" type="button" value="Voltar" onclick="window.location.href='principal.php'">
        </p>
    </div>
    <script src="cadastro.js"></script>
</body>

</html>