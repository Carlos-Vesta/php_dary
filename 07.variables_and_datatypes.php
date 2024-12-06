<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables And Datatypes</title>
</head>
<body>
    <?php

    // VARIABLES
    // Is a symbol or name that stands for a value 

    /* 
    VARIABLES NAMES

    Variables name starts with a letter A-Z or a-z, underscore (_) followed by any
    number of letters, numbers or underscores.
    */

    $name = "Carlos"; // Valid variable
    $Name = "Fernandes"; // Valid variable
    // $9name = "My name"; // Invalid variable, starts with a number
    $_name = "Vesta"; // Valid variable
    $_9name = "Carlos Fernandes Vesta"; // Valid variable
        
    echo "Meu nome é " . $name . ". <br>"; 
    echo "O meu segundo nome é {$Name}. <br>"; 
    echo "O meu apelido é {$_name}. <br>";
    echo "O meu nome completo é <strong>{$_9name}</strong>."
    ?>
    
</body>
</html>