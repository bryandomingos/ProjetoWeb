<!DOCTYPE html>
<html>

<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>

<body>
    <?php
    require('conexao.php');
    if (isset($_REQUEST['nome'])) {
        $usuario = stripslashes($_REQUEST['nome']);
        $usuario = mysqli_real_escape_string($con, $usuario);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $senha = stripslashes($_REQUEST['senha']);
        $senha = mysqli_real_escape_string($con, $senha);
        $query = "INSERT into `new_table` (usuario, email, senha)
                     VALUES ('$usuario', '" . $email . "', '$senha')";
        $result = mysqli_query($con, $query);

        if ($result) {
            header("Location: login.php");

        } else {
        }
    } else {
    ?>
    <ul>
        <li><a href="login.php">Login</a></li>
        <li><a href="cadastro.php">Cadastro</a></li>
    </ul>
    <form name="form1" action="cadastro.php" method="post" autocomplete="off">
        <div class="cadastro">
            <h1>Cadastro</h1>
            <div class="cadastroUsuario">
                <label>Nome</label>
                <input class="login-input" type="text" id="nome" name="nome" placeholder="Digite seu nome" required=""
                    oninvalid="this.setCustomValidity('Todos os campos são obrigatórios.')"></input>
            </div>
            <div class="cadastroUsuario">
                <label>E-mail</label>
                <input class="login-input" type="email" id="email" name="email" placeholder="Digite seu e-mail"></input>
            </div>
            <div class="cadastroUsuario">
                <label>Senha</label>
                <input class="login-input" type="password" id="senha" name="senha" placeholder="Digite sua senha"
                    required="" oninvalid="this.setCustomValidity('Todos os campos são obrigatórios.')"></input>
            </div>
            <div class="cadastroUsuario">
                <label>Confirmar Senha</label>
                <input class="login-input" type="password" id="senha2" name="senha2" placeholder="Repita sua senha"
                    required="" oninvalid="this.setCustomValidity('Todos os campos são obrigatórios.')"></input>
            </div>
            <input class="button" type="submit" value="Cadastrar" onclick="validar()">
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