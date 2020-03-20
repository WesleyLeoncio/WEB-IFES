<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/ex4.css">
    <title>:: Formulario 4 ::</title>
</head>

<body>
    <H1>Estudo Presencial</H1>
    <h2>Formulario de Pré-Matricula</h2>
    <form action="" name="formEX4" id="formEX4" method="post">
        <table border="2" class="tabela" cellpadding="5">
            <tr>
                <td>
                    <div class="PrincipalP">
                        <div class="Dados">
                            <label class="Titulos" for="iTituloForm">Dados Pessoais: </label></br>
                        </div>

                        <div class="NomeAluno">
                            <label for="iNome">Nome do Aluno: </label>
                            <input class="TamanhoTxt" name="nNomeAluno" type="text" value="" id="iNomeAluno" />
                        </div>

                        <div class="Nacimento">
                            <label for="nNacimento">Nacimento (dd/mm/aaaa)</label>
                            <input class="TamanhoData" name="nDia" type="text" value="" id="iDia" /><label for="">/</label>
                            <input class="TamanhoData" name="nMes" type="text" value="" id="iMes" /><label for="">/</label>
                            <input class="TamanhoData" name="nAno" type="text" value="" id="iAno" />
                        </div>

                        <div class="NomeMae">
                            <label for="nNome">Nome da Mãe: </label>
                            <input class="TamanhoTxt" name="nNomeMae" type="text" value="" id="iNomeMae" />
                        </div>

                        <div class="NomePai">
                            <label for="nNome">Nome da Pai: </label>
                            <input name="nNomePai" type="text" value="" id="iNomePai" />
                        </div>

                        <div class="Telefone">
                            <label for="nTelefone">Telefone: DDD </label>
                            <label for="">(</label><input class="TamanhoDDD" name="iDdd" type="text" value="" id="iDdd" /><label for="">)</label>
                            <label for="">Tel: </label>
                            <input class="TamanhoTel" name="nTelefone" type="text" value="" id="iTelefone" />
                            <label for="">Ramal: </label>
                            <input class="TamanhoRamal" name="nRamal" type="text" value="" id="iRamal" /></br>

                        </div>

                        <div class="Email">
                            <label for="iemail">E-mail: </label>
                            <input class="TamanhoTxt" name="nEmail" type="text" value="" id="iEmail" /></br>
                        </div>

                    </div>

                </td>
            </tr>
            <tr>
                <td>

                    <div class="PrincipalM">
                        <div class="Serie">
                            <label class="Titulos" for="iTituloForm">Informações de Matricula: </label></br>
                            <label for="">Série: </label></br>
                            <select name="nSerie">
                                <option value="pEscola">pré-escola</option>
                            </select></br>
                        </div>

                        <div class="Turno">
                            <label for="iTurno">Turno:</label></br>
                            <input name="nManha" type="radio" value="" id="iManha" /><label for="">Manhã</label></br>
                            <input name="nTarde" type="radio" value="" id="iTarde" /><label for="">tarde</label></br>

                        </div>
                        <div class="Atividade">
                            <label for="">Atividade Extracurriculares:</label></br>
                            <label for="">Informatica</label>
                            <input name="nInformatica" type="checkbox" value="Informatica" id="iInformatica" /></br>

                            <label for="">Musica</label>
                            <input name="nMusica" type="checkbox" value="Musica" id="iMusica" /></br>

                            <label for="">Balet</label>
                            <input name="nBalet" type="checkbox" value="Balet" id="iBalet" /></br>

                            <label for="">Pintura</label>
                            <input name="nPintura" type="checkbox" value="Pintura" id="iPintura" /></br>

                            <label for="">Judô</label>
                            <input name="nJudo" type="checkbox" value="Judô" id="iJudo" /></br>

                            <label for="">Futebol</label>
                            <input name="nFutebol" type="checkbox" value="Futebol" id="iFutebol" /></br>

                        </div>
                    </div>

                </td>
            </tr>
        </table>

        <div class="Botoes">
            <input type="submit" name="nEnviar" class="btn btn-outline-dark" value="Enviar Formulario" />
            <input type="submit" name="nLimpar" class="btn btn-outline-dark" value="Limpar Campo" />
        </div>
    </form>

</body>

</html>