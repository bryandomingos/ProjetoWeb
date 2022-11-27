var senha = document.getElementById("senha");
var senha2 = document.getElementById("senha2");
var nome = document.getElementById("nome");
var email = document.getElementById("email");

var item = document.getElementById("nomeItem");

function validar() {
    if(nome.value == "" || email.value == "" || senha.value == "" || senha2.value == "") {
        alert("Todos os campos são obrigatórios.")
        return false;
    }
    else if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form1.email.value)) {
        alert("Insira um E-mail válido.")
        return false;
    }
    else if(senha.value == senha2.value) {
        alert("Conta criada com sucesso, retornando para a pagina de login.");

        window.location.href = "login.php";
 
        return true;
    }
    else {
        alert("As senhas não são iguais.")
        return false;
    }
}