<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name ="author"
        content = "Wesley" />
        <title>Variaveis</title>
    </head>
    <body>
        <?php
            $a = 5;
            $b = 8;
            echo "A: $a e B: $b";
            echo "<br />";
            echo "A: " .$a ."B: ".$b;
            echo "<br />";
            $soma = $a + $b;
            echo "<br />";
            echo "Soma: $soma";
            echo "<br />";
            while ($a <= $b) {
                if($a % 2 == 0){
                    echo "Pares $a , <br />";
                }
              $a++;
            }
            echo "Numeros de 1 a 50 <br />";
            for ($i=1; $i <= 50; $i++) { 
                echo $i ."<br />";
            }
            $nome = "Wesley";
            $sobrenome = "Leoncio";
            echo "<br />";
            echo $nome . " " .$sobrenome;
        ?>
    </body>
</html>