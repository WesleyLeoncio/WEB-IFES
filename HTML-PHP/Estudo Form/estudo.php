<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="conf.css" />
    <title>:: Formulario ::</title>

</head>

<body>
    <form name="formTeste" method="post" action="receberDados.php">
        <div class="principal">
            <div class="nome">
                <label for="ipNome">Nome</label>
                <input name="nNome" type="text" id="ipNome">
            </div>
            <div class="cpf">
                <label for="ipCpf">CPF</label>
                <input type="text" name="nCpf" id="ipCpf">
            </div>
            <div class="botao">
                <button type="submit">Enviar</button>
            </div>

        </div>


    </form>
</body>

</html>