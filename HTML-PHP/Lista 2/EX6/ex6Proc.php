<?php
session_start();

$numero = $_POST['numero'];
$valor = "<h4>Tabuada</h4> </br>";


for ($i = 0; $i <= 10; $i++) {
    $valor .= $numero . " x " . $i . " = " . $numero * $i . " </br>";
}


if (empty(!$valor)) {
    $_SESSION['valor'] = "<div class='alert alert-success' role='alert'>
          $valor
        </div>";
    header("location: ex6.php");
}
