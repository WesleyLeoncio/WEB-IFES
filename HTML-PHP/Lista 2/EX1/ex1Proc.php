<?php
session_start();

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

$valor = "Resultado: " . somar($n1, $n2);

function somar($n1, $n2)
{
    $soma = $n1 + $n2;

    if ($soma > 20) {
        $soma += 8;
        return $n1 . " + " . $n2 . " + 8" . " = " . $soma;
    } else {
        $soma -= 5;
        return $n1 . " + " . $n2 . " - 5" . " = " . $soma;
    }
}

if (empty(!$valor)) {
    $_SESSION['valor'] = "<div class='alert alert-success' role='alert'>
          $valor
        </div>";
    header("location: ex1.php");
}
