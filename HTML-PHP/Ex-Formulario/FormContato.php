<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset = "utf-8" />
        <title>:: Formulários de Contato ::</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="formCSS.css">
    </head>
    <body>

    <div class="cabecario">
      <div class="container">
        <h1 class="titulo">Formulario de Contato</h1>
        <p class="texto">Preencha todos os campos corretamente para entrar em contato!</p>
      </div>
    </div>

        <?php
          session_start();
          if(isset($_SESSION['msgErro'])){
            echo $_SESSION['msgErro'];
            unset($_SESSION['msgErro']);

          }
        ?>

        <form action="FormProc.php" name="formContato" id="formContato" method="post">
            <p>Faça Contato</p>
            <label for="iNome">Nome:</label>
            <input name="nNome" type="text" value="" id="iNome" /></br></br>
            <label for="iEmail">Email:</label>
            <input name="nEmail" type="text" value="" id="iEmail" /></br></br>

        <p><label>Curso</label>
                <select name="nCurso">
                    <optgroup label="Ensino Médio">
                        <option value="EMI">Eletromecânica Integrado</option>
                        <option value="IMI">Informática Integrado</option>
                    </optgroup>
                    <optgroup label="Ensino Superior">
                        <option value="SI">Sistemas de Informação</option>
                        <option value="EM">Engenharia Mecânica</option>
                        <option value="LI">Licenciatura em Informática</option>
                    </optgroup>
                    <optgroup label="Pós-Graduação">
                        <option value="PR">Pós Graduação em Rochas</option>
                    </optgroup>            
                </select>
            </p>
            <label for="iIdade">Idade:</label>
                <input name="nIdade" type="number" step="1"
                placeholder="Digite sua idade" id="iIdade" /></br></br>


            <p><label for="iMsg">Mensagem:</label></br>
                <textarea name="msg" id="iMsg" cols="30" rows="5"></textarea>
            <p>
                <input type="submit" name="nCadastrar" 
                    class="btn btn-outline-success"
                    value="Cadastrar" />
            </p>
        </form>
   
        <!-- Aqui todos os elementos foram criados -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>