<?php
session_start();

$a = $_POST['lado1'];
$b = $_POST['lado2'];
$c = $_POST['lado3'];

$valor = verifcarTriangulo($a, $b, $c);

function verifcarTriangulo($a, $b, $c)
{
    if (($a >= $b + $c) || ($b >= $a + $c) || ($c >= $a + $b) || ($a <= 0) || ($b <= 0) || ($c <= 0)) {
        return "Não é um Triangulo";
    } else if (($a == $b) && ($b == $c)) {
        return "Triângulo Equilátero";
    } else if (($a == $b) || ($b == $c) || ($a == $c)) {
        return "Triângulo Isósceles";
    } else {
        return "Triângulo Escaleno";
    }
}


if (empty(!$valor)) {
    $_SESSION['valor'] = "<div class='alert alert-success' role='alert'>
          $valor
        </div>";
    header("location: ex4.php");
}
