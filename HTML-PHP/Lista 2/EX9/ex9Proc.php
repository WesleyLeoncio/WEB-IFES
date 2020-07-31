<?php
session_start();

$massa = $_POST['massa'];
$tempo = 30;

while ($massa > 0.10) {
    $massa -= ($massa * 0.25);
    $tempo += 30;
}




$valor = "Sera necessario " . $tempo . " segundos";

if (empty(!$valor)) {
    $_SESSION['valor'] = "<div class='alert alert-success' role='alert'>
          $valor
        </div>";
    header("location: ex9.php");
}
