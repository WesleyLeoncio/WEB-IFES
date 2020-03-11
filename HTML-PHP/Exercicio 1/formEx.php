<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>:: Formulário ::</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/ex1.css">
</head>
<body>
    <table border="1">
      <tr>
        <td colspan="2"><label class="titulo">Formulario de Cadastro</label></td>
      </tr>
      <tr>
        <td><label for="iNome">Nome: </label></td>
        <td><input name="nNome"type="text" value="" id="iNome" /></td>
      </tr>
      <tr>
        <td><label for="iEmail">Email: </label></td>
        <td><input name="nEmail"type="text" value="" id="iEmail" /></td>
      </tr>
      <tr>
        <td><label for="iCidade">Cidade: </label></td>
        <td><input name="nCidade"type="text" value="" id="iCidade" />
            <select name="nEstado">
                <option value="Titulo">Escolha o Estado</option>
                <option value="ES">ES</option>
                <option value="SP">SP</option>
                <option value="RJ">RJ</option>
                <option value="MG">MG</option>
            </select>
        </td>
      </tr>
      <tr>
        <td><label>Sexo:</label></td>
        <td>
           <input name="nSexo" type="radio" value="M" id="iSexoMasc"/><label for="iSexoMasc">Masculino</label>
           <input name="nSexo" type="radio" value="F" id="iSexkFem"/><label for="iSexoFem">Feminino</label>
        </td>
      </tr>
      <tr>       
        <td><label>Data de Nacimento:</label></td>
        <td><input name="nNasc" type="date" value="" id="iNasc"/></p></td>
      </tr>
      <tr>
        <td colspan="2" class="botao">
           <input type="submit" name="nCadastrar" 
            class="btn btn-outline-success"
            value="Cadastrar" />

            <input type="submit" name="nApagar" 
            class="btn btn-outline-dark"
            value="Apagar"/>
    
        </td>
      </tr>
    </table>

</body>
</html>