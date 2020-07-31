<?php
session_start();

$numeros;
$valor;
$soma = 0;
$negativos = 0;

for ($i = 0; $i < 20; $i++) {
    $numeros[$i] = $_POST['v' . $i];
}

foreach ($numeros as $i) {
    if ($i >= 0) {
        $soma += $i;
    } else {
        $negativos++;
    }
}

$valor = "Soma = " . $soma . " Total de numeros Negativos = " . $negativos;

if (empty(!$valor)) {
    $_SESSION['valor'] = "<div class='alert alert-success' role='alert'>
          $valor
        </div>";
    header("location: ex5.php");
}
