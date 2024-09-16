<?php

    define("mainTitle", "Funciones de Partlist");

    function partlist(array $array) {
        if(count($array) < 2){
            echo "Array demasiado pequeño";
            return;
        }

        $result = [];
        $position = 1;

        foreach($array as $value) {
            $part1 = array_slice($array, 0, $position);
            $part2 = array_slice($array, $position);

            if(count($part1) == 0 || count($part2) == 0) continue;

            $result[] = [implode(" ", $part1), implode(" ", $part2)];
            $position++;
        }

        echo '<pre>' . print_r($result, true) . '</pre>';
    }

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

            $names = ["Pere", "Anna", "Joan", "Maria", "Pau", "Marta", "Pol", "Jordi", "Laura", "Marc"];
            partlist($names);

        ?>

    </body>
</html>