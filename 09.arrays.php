<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays</h1>

    <?php
    $car1 = "BMW";
    $car2 = "Audi";
    $car3 = "Mercedes";


    // We can just use array to store all the cars
    $cars = array("BMW", "Audi", "Mercedes");

    echo $cars[0];
    echo "<br><br>";

    var_dump($cars); // var_dump => é uma função que mostra a estrutura de uma ou mais expressões que incluem o tipo e valor
    echo "<br><br>";
    
    print_r($cars);
    echo "<br><br>";

    $cars2 = array("Ferrari", "Chevy", "Volskwagen");

    // We can MERGE any array with another array
    $cars = array_merge($cars, $cars2);
    
    echo var_dump($cars);
    echo "<br><br>";

    print_r($cars);




    ?>
    
</body>
</html>