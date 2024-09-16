<?php

    define("mainTitle", "Funciones de Callback");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Pere Prior">
        <title><?=mainTitle?></title>
    </head>
    <body>
        
        <?php

            $names = ["123456789", "12", "Joan", "Maria", "Pau", "Marta", "Pol", "Jordi", "Laura", "Marc"];

            $lengths = array_map("strlen", $names);
            $maxLength = max($lengths);
            $minLength = min($lengths);

            echo "La longitud máxima de las cadenas es: <strong>$maxLength</strong><br>";
            echo "La longitud mínima de las cadenas es: <strong>$minLength</strong><br>";

        ?>

    </body>
</html>