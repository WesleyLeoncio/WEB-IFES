<?php
session_start();

$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$idade = $_POST['idade'];

$valor;

if ($idade < 25 && $sexo == "feminino") {
    $valor = $nome . " Aceita!";
} else {
    $valor = $nome . " Não Aceita!";
}







if (empty(!$valor)) {
    $_SESSION['valor'] = "<div class='alert alert-success' role='alert'>
          $valor
        </div>";
    header("location: ex3.php");
}
