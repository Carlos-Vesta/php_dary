<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays</title>
</head>
<body>
    <h1>Multidimensional Arrays</h1>
    
    <?php
        /**
         * Multidimensional Arrays
         * 
         * Expensive Cars
         * Audi, Mercedes-Benz, BMW
         * 
         * Inexpensive Cars
         * Volvo, Ford, Toyota
         */

         $cars = array(
            "ExpensiveCars" => array("Audi", "Mercedes-Benz", "BMW"),
            "InexpensiveCars" => array("Volvo", "Ford", "Toyota")
         );

         echo $cars["ExpensiveCars"][1] . "<br>";
         echo $cars["InexpensiveCars"][0];
    ?>
</body>
</html>