<!DOCTYPE html>
<html lang="en">
    <head>  <!-- Broco de Configuração da pagina-->
        <meta charset="UTF-8"> 
        <meta name ="author"
        content = "Wesley" />
        <title>Variaveis</title>
    </head>
    <body>  <!-- Corpo do codigo onde sera exibido as informações -->
        <?php  //Broco para utilizar codigos em php
            $a = 5; // Declaração de variavel 
            $b = 8;
            echo "Concatenção <br />";
            echo "A: $a e B: $b";
            echo "<br />"; // Usado para quebrar linha 
            echo "A: " .$a ." e B: ".$b; // concatena
            echo "<br />";
            $soma = $a + $b;
            echo "<br />";
            echo "Soma: $a + $b = $soma <br />";
            echo "<br />";
            
            while ($a <= $b) {
                if($a % 2 == 0){
                    echo "Par $a  <br />";
                }
              $a++;
            }
            echo "<br />";
            echo "Numeros de 1 a 10 <br />";

            for ($i=1; $i <= 10; $i++) { 
                echo $i ."<br />";
            }

            $nome = "Wesley";
            $sobrenome = "Leoncio";
            echo "<br />";
            echo $nome . " " .$sobrenome;
        ?>
    </body>
</html>