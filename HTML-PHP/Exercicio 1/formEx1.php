<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>:: Formulário 1 ::</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="CSS/ex1.css">
</head>
<body>

  <form action="http://www.flavioizo.com/form/enviar_tela.php" name="formEX1" id="formEx1" method="post">
    <table border="1" class="tabela">
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
                <option value="Titulo">Selecione um Estado</option>
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
        <td><input name="nNasc" type="date" value="" id="iNasc"/></td>
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
  
  </form>
    

</body>
</html>