<?php
session_start();
$msgLogar = "";
$login = "";
$senha = "";
$auxLogin = "admin";
$auxSenha = "123";

if (isset($_POST['nLogin'])) {
    $login = $_POST['nLogin'];
}

if (isset($_POST['nSenha'])) {
    $senha = $_POST['nSenha'];
}



if (($login == $auxLogin) && ($senha == $auxSenha)) {
    $msgLogar = "Login efetuado com sucesso!";
    $_SESSION['msgLogar'] = "<div class='alert alert-success' role='alert'>
    $msgLogar
  </div>";
    header("location: formLogin.php");
}
