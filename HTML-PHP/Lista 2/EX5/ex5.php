<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Exercicio 5 :: </title>
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
    <h3>Exercício 05</h3>
    <h4>Entrar com 20 números e imprimir a soma dos positivos e o total de números negativos.</h4>

    <div class="principal">
        <form name="formEx5" method="post" action="ex5Proc.php">
            <div>
                <input name="v0" type="text" value="1">
                <input name="v1" type="text" value="2">
                <input name="v2" type="text" value="3">
            </div></br>
            <div>
                <input name="v3" type="text" value="4">
                <input name="v4" type="text" value="5">
                <input name="v5" type="text" value="6">
            </div></br>
            <div>
                <input name="v6" type="text" value="7">
                <input name="v7" type="text" value="8">
                <input name="v8" type="text" value="9">
            </div></br>
            <div>
                <input name="v9" type="text" value="10">
                <input name="v10" type="text" value="-1">
                <input name="v11" type="text" value="-2">
            </div></br>

            <div>
                <input name="v12" type="text" value="-3">
                <input name="v13" type="text" value="-4">
                <input name="v14" type="text" value="-5">
            </div></br>
            <div>
                <input name="v15" type="text" value="-6">
                <input name="v16" type="text" value="-7">
                <input name="v17" type="text" value="-8">
            </div></br>
            <div>
                <input name="v18" type="text" value="-9">
                <input name="v19" type="text" value="-10">
            </div>


            <button type="submit" class="btn btn-success">Verificar</button>

        </form>

    </div>

    <style>
        .principal {
            margin-top: 30px;
        }

        button {
            margin-top: -60px;
            margin-left: 375px;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>