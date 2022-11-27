<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <?php
    require('conexao.php');
    session_start();
    if (isset($_POST['email'])) {
        $usuario = stripslashes($_REQUEST['email']);
        $usuario = mysqli_real_escape_string($con, $usuario);
        $senha = stripslashes($_REQUEST['senha']);
        $senha = mysqli_real_escape_string($con, $senha);

        $query = "SELECT * FROM `new_table` WHERE email='$usuario' AND
                     senha='" . $senha . "'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $usuario;
            header("Location: principal.php");
        } else {
            echo "<div class='form'>
                  <h3>E-mail ou senha incorreta.</h3><br/>
                  <p class='link'>Clique <a href='login.php'>aqui</a> para tentar novamente.</p>
                  </div>";
        }
    } else {
    ?>
    <div class="nav">
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="cadastro.php">Cadastro</a></li>
        </ul>
    </div>
    <form name="form2" class="form" method="post">
        <div class="fade-in">
            <div class="cadastro">
                <h1>Login</h1>
                <form class="form" method="post" name="login">
                    <div class="cadastroUsuario">
                        <input class="login-input" type="email" id="email" name="email" placeholder="E-mail" required=""
                            oninvalid="this.setCustomValidity('Todos os campos são obrigatórios.')"></input>
                    </div>
                    <div class="cadastroUsuario">
                        <input class="login-input" type="password" id="senha" name="senha" placeholder="Senha"
                            required="" oninvalid="this.setCustomValidity('Todos os campos são obrigatórios.')"></input>
                    </div>
                    <p><input class="button" type="submit" value="Login"></p>
                    <p>Ainda não tem cadastro? <a href="cadastro.php">Cadastre-se</a></p>
                </form>
            </div>
        </div>
    </form>
    <?php
    }
    ?>
</body>

</html>