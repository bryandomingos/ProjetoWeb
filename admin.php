<?php
include("sessao.php");
require('conexao.php');

$result = mysqli_query($con, "SELECT isadmin FROM `new_table` WHERE email= '" . $_SESSION['email'] . "'");
while ($row = mysqli_fetch_array($result)) {
    $isadmin = $row['isadmin'];
}
if ($isadmin == 0) {
    header("Location: principal.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Edição Admin</title>
    <link rel="stylesheet" href="principal.css">
    <ul>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="principal.php">Inicio</a></li>
        <li><a href="cadastroItem.php">Cadastrar</a></li>
        <li><a href="devolverItem.php">Devolver</a></li>
        <li><a href="itensPendentes.php">Pendentes</a></li>
        <li><a href="itensUsuario.php">Seus Itens</a></li>
        <li><a href="infoUsuario.php">Usuario</a></li>
    </ul>
</head>

<body>
    <div class="cadastro">
        <h1>Edição Admin</h1>
        <table>
            <tr>
                <th style='border:blue; border-width:1px; border-style:solid;'>ID</th>
                <th style='border:blue; border-width:1px; border-style:solid;'>Usuario</th>
                <th style='border:blue; border-width:1px; border-style:solid;'>Item</th>
                <th style='border:blue; border-width:1px; border-style:solid;'>Data de Emprestimo</th>
                <th style='border:blue; border-width:1px; border-style:solid;'>Data de Devolucao</th>
                <th style='border:blue; border-width:1px; border-style:solid;'>Contato</th>
                <th style='border:blue; border-width:1px; border-style:solid;'>Status</th>
            </tr>
            <?php

            if (isset($_POST['Entregue'])) {
                $idItem = stripslashes($_REQUEST['idItem']);
                $idItem = mysqli_real_escape_string($con, $idItem);
                $query = "UPDATE `new_table2` SET devolvido = '1'WHERE id='$idItem'";
                $result = mysqli_query($con, $query);

            }
            if (isset($_POST['Pendente/Expirado'])) {
                $idItem = stripslashes($_REQUEST['idItem']);
                $idItem = mysqli_real_escape_string($con, $idItem);
                $query = "UPDATE `new_table2` SET devolvido = '0'WHERE id='$idItem'";
                $result = mysqli_query($con, $query);
            }
            if (isset($_POST['Deletar'])) {
                $idItem = stripslashes($_REQUEST['idItem']);
                $idItem = mysqli_real_escape_string($con, $idItem);
                $query = "DELETE FROM new_table2 WHERE id = '$idItem'";
                $result = mysqli_query($con, $query);
            }

            $query = "SELECT * FROM `new_table2`";
            if ($mysqli_query = mysqli_query($con, $query)) {
                while ($mysqli_row = mysqli_fetch_assoc($mysqli_query)) {
                    if ($mysqli_row['devolvido'] == 1) {
                        $colorClass = 'green';
                        $entregue = 'Entregue';
                    } else if ($mysqli_row['data2'] == null || date('Y-m-d') > $mysqli_row['data2']) {
                        $colorClass = 'red';
                        $entregue = 'Expirado';
                    } else {
                        $colorClass = 'black';
                        $entregue = 'Pendente';
                    }

                    if ($mysqli_row['data2'] == null) {
                        $mysqli_row['data2'] = '-';
                        $styleCenter = 'class=styleCenter';
                    } else {
                        $styleCenter = 'class=styleCenter';
                    }

                    echo "
			
                        <tr class=" . $colorClass . ">
                            <td style='border:gray; border-width:1px; border-style:solid;'>" . $mysqli_row['id'] . "</td>
                            <td style='border:gray; border-width:1px; border-style:solid;'>" . $mysqli_row['usuario'] . "</td>
                            <td class=" . $colorClass . " style='border:gray; border-width:1px; border-style:solid;'>" . $mysqli_row['item'] . "</td>
                            <td style='border:gray; border-width:1px; border-style:solid;'>" . $mysqli_row['data3'] . "</td>
                            <td $styleCenter   style='border:gray; border-width:1px; border-style:solid;'>" . $mysqli_row['data2'] . "</td>
                            <td style='border:gray; border-width:1px; border-style:solid;'>" . $mysqli_row['email'] . "</td>
                            <td style='border:gray; border-width:1px; border-style:solid;'>" . $entregue . "</td>
                        </tr>
                    ";

                }
            } else {
                die(mysqli_error($con));
            }
            ?>
        </table>

        <form name="form6" action="admin.php" method="post">
            <div class="cadastroUsuario">
                <input class="login-input" type="text" id="idItem" name="idItem"
                    placeholder="Digite o ID do item"></input>
            </div>
            <input class="button" name="Entregue" type="submit" value="Entregue"
                onclick="window.location.href='admin.php'">
            <input class="button" name="Pendente/Expirado" type="submit" value="Pendente/Expirado"
                onclick="window.location.href='admin.php'">
            <input class="button" name="Deletar" type="submit" value="Deletar"
                onclick="window.location.href='admin.php'">
            <input class="button2" type="button" value="Voltar" onclick="window.location.href='principal.php'">
        </form>
    </div>
    <script src="principal.js"></script>
</body>

</html>