<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Exercicio 4 :: </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/formCSS.css">
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['valor'])) {
        echo $_SESSION['valor'];
        unset($_SESSION['valor']);
    }
    ?>
    <h3>Exercício 04</h3>
    <h4>Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho
        dos lados.
    </h4>

    <div class="principal">
        <form name="formEx4" method="post" action="ex4Proc.php">
            <label for="lado1">Lado 1</label>
            <input name="lado1" type="text">

            <label for="lado2">Lado 2</label>
            <input name="lado2" type="text">

            <label for="lado3">Lado 3</label>
            <input name="lado3" type="text">

            <button type="submit" class="btn btn-success">Verificar</button>

        </form>

    </div>

    <style>
        .principal {
            margin-top: 30px;
        }

        button {
            margin-left: 20px;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>