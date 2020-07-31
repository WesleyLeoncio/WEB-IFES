<?php
session_start();
$msgErro = "";

if (isset($_POST['nNome'])) {
    $nome = $_POST['nNome'];
    if (empty($nome)) {
        $msgErro .= "Nome Inválido!\n";
    }
}

if (isset($_POST['nEmail'])) {
    $email = $_POST['nEmail'];
    if (empty($email)) {
        $msgErro .= "Email Inválido!\n";
    }
}

if (isset($_POST['nIdade'])) {
    $idade = $_POST['nIdade'];
    if (empty($idade) || $idade < 18) {
        $msgErro .= "Idade Inválido!\n";
    }
}

if (isset($_POST['msg'])) {
    $Msg = $_POST['msg'];
    if (empty($Msg)) {
        $msgErro .= "Mensagem Inválido!\n";
    } else {
        echo $Msg;
    }
}

if (empty(!$msgErro)) {
    $_SESSION['msgErro'] = "<div class='alert alert-danger' role='alert'>
          $msgErro
        </div>";
    header("location: FormContato.php");
}
