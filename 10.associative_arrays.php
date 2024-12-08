<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <h1>Associative Arrays</h1>

    <?php

        // Associative Array
        $cars = array("Audi" => 50.500, "BMW" => 40.700, "Mercedes" => 60.300);

        var_dump($cars);

        echo "<br><br>";

        // Ciclo foreach
        foreach ($cars as $key => $value) {
            // echo "My " . $key . " has " . $value . " mileage. <br>";
            echo "My <strong>{$key}</strong> has <strong>{$value}</strong> mileage. <br>";
        };

    ?>
</body>
</html>