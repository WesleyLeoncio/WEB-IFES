<?php
session_start();

$livro = $_POST['livro'];
$usuario = $_POST['usuario'];
$valor;

if ($usuario == "professor") {
    $valor = "Nome do Livro: " . $livro . "</br>" . " Tipo: " . $usuario . "<br/>" . "Prazo de Entrega 10 dias";
} else if ($usuario == "aluno") {
    $valor = "Nome do Livro: " . $livro . "</br>" . " Tipo: " . $usuario . "<br/>" . "Prazo de Entrega 3 dias";
} else {
    $valor = "Tipo de usuario incorreto!";
}



if (empty(!$valor)) {
    $_SESSION['valor'] = "<div class='alert alert-success' role='alert'>
          $valor
        </div>";
    header("location: ex7.php");
}
