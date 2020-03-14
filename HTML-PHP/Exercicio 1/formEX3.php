<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>:: Formulário 3 ::</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="CSS/ex3.css">
</head>

<body>
  <form action="" name="formEX3" id="formEX3" method="post">
    <table border="2" class="tabela" cellpadding="5">
      <tr>
        <td colspan="2"><label class="titulo">PAGAMENTO</label></td>
      </tr>
      <tr>
        <td><label class="ngText" for="iNumero">Número: </label></td>
        </td>
        <td><input name="nNumero" type="text" value="" id="iNumero" /></td>
      </tr>

      <tr>
        <td><label class="ngText" for="iBandeira">Bandeira: </label></td>
        <td class="Bandeira">
          <input name="nBandeira" type="radio" value="VISA" id="iVisa" /><label for="iBandVisa"></label>
          <img id="imgVisa" width="50" height="50" src="Image/visa.png" alt="Visa">
          <input name="nBandeira" type="radio" value="Master Card" id="iMaster" /><label for="iBandMasterCard"></label>
          <img id="imgMaster" width="50" height="50" src="Image/mastercard.png" alt="Master Card">
          <input name="nBandeira" type="radio" value="American Express" id="iAmerican" /><label for="iBandAmerican"></label>
          <img id="imgAmerican" width="50" height="38WS" src="Image/american.png" alt="American Express">
        </td>
      </tr>

      <tr>
        <td><label class="ngText" for="iValidade">Validade: </label></td>
        <td>
          <select name="nValidade">
            <option value="ano2015">2015</option>
            <option value="ano2016">2016</option>
            <option value="ano2017">2017</option>
            <option value="ano2018">2018</option>
          </select>
        </td>
      </tr>
      </tr>

    </table>
  </form>
</body>

</html>