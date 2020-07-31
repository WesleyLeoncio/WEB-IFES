<?php
session_start();

$n1 = $_POST['n1'];

$valor = "O numero " . $n1;

if ($n1 % 10 == 0) {
    $valor .= " é divisível por 10";
}

if ($n1 % 5 == 0) {
    $valor .= " é divisível por 5";
}

if ($n1 % 10 == 0) {
    $valor .= " é divisível por 2";
}

if ($n1 % 10 != 0 && $n1 % 5 != 0 && $n1 % 2 != 0) {
    $valor .= " não divisível por 10, 5, 2";
}



if (empty(!$valor)) {
    $_SESSION['valor'] = "<div class='alert alert-success' role='alert'>
          $valor
        </div>";
    header("location: ex2.php");
}
