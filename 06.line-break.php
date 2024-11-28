<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line Break</title>
</head>
<body>
    <?php
        // Quebra de linhas

        /*
            Há várias formas de criar quebra de linhas em um código PHP

            1 - Forma do PHP:  Usando a função 2BR - nl2br("Aqui vai a \r\n quebra de linha.")
            2 - Forma HTML: Usamos a tag <br>
        */

        echo nl2br("Meu nome é Carlos, mas há quem também me chama \r\n por Vesta. <br>"); // 2br mode

        echo "Eu vivo em Moçambique" . "<br>"; // br mode
        echo "Eu gosto de programar";
    ?>
    
</body>
</html>