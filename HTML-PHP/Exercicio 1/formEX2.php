<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>:: Formulário 2 ::</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="CSS/ex2.css">
</head>
<body>

  <form action="http://www.flavioizo.com/form/enviar_tela.php" name="formEX2" id="formEx2" method="post">
    <table border="2" class="tabela">
      <tr>
        <td colspan="2"><label class="titulo">Formulario</label></td>
      </tr>
      <tr>
        <td><label for="iNome">Nome: </label></td>
        <td><input name="nNome"type="text" value="" id="iNome" /></td>
      </tr>
      <!-- ------------------------------------------------------------ -->
      <tr>
        <td><label>Sexo:</label></td>
        <td>
           <input name="nSexo" type="radio" value="M" id="iSexoMasc"/><label for="iSexoMasc">Masculino</label>
           <input name="nSexo" type="radio" value="F" id="iSexkFem"/><label for="iSexoFem">Feminino</label>
        </td>
      </tr>
      <!-- ------------------------------------------------------------ -->
      <tr>
        <td colspan="2"><label>Escolaridade:</label>
            <select name="nEscolaridade">
                <option value="1grau">1º Grau</option>
                <option value="2grau">2º Grau</option>
                <option value="superior">Superior</option>
            </select>
        </td>
      </tr>
    
      
       
        

     
     
    </table>
  
  </form>
    

</body>
</html>