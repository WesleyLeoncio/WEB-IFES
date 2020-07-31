<?php
session_start();

$numero = $_POST['numero'];
$soma = 0;
$valor = "Numero  Perfeito: " . "<b>" . $numero . "</b>" . " = ";

for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        if ($i != $numero) {
            $soma += $i;
            $valor .= $i . " ";
        }
    }
}

if ($numero == $soma) {
    $valor .= "= <b>" . $soma . "</b>";
} else {
    $valor = "O numero " . $numero . " não é perfeito";
}


$valor;

if (empty(!$valor)) {
    $_SESSION['valor'] = "<div class='alert alert-success' role='alert'>
          $valor
        </div>";
    header("location: ex10.php");
}
