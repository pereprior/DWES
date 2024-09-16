<?php

    define("mainTitle", "Funciones de Arrays");

    function searchNameOnArray(array $names, string $name) : string {
        $result = array_search($name, $names);
    
        if ($result !== false) {
            return "El nombre <strong>$myName</strong> se encuentra en la posición <strong>" . $result . "</strong><br>";
        } else {
            return "The name is <strong>not</strong> in the array<br>";
        }
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

        <h2>Funciones de Arrays</h2>

        <?php

            $names = ["Pere", "Anna", "Joan", "Maria", "Pau", "Marta", "Pol", "Jordi", "Laura", "Marc"];
            $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

            echo "Array con la que voy a trabajar: <strong>";
            print_r($names);
            echo "</strong><br>";

            echo "<br>El array tiene <strong>" . count($names) . "</strong> elementos<br>";
            echo "Elementos del array en un string: <strong>" . implode("   ", $names) . "</strong><br>";

            asort($names);
            echo "Array ordenado alfabeticamente: <strong>";
            print_r($names);
            echo "</strong><br>";

            krsort($names);
            echo "Array en orden inverso: <strong>";
            print_r($names);
            echo "</strong><br>";

            $myName = $_GET['name'] ?? "Pere";
            echo searchNameOnArray($names, $myName);

            echo "<br>Array numerica con el que voy a trabajar: <strong>";
            print_r($numbers);
            echo "</strong><br>";
            $sum = array_sum($numbers);
            echo "La suma de los elementos del array es <strong>$sum</strong>";

        ?>

        <br><br>

        <h3>Arrays Bidimensionales</h3>

        <?php

            $students = [
                ["id" => 1, "name" => "Pere", "age" => 20],
                ["id" => 2, "name" => "Anna", "age" => 21],
                ["id" => 3, "name" => "Joan", "age" => 22],
                ["id" => 4, "name" => "Maria", "age" => 23],
                ["id" => 5, "name" => "Pau", "age" => 24],
                ["id" => 6, "name" => "Marta", "age" => 25],
                ["id" => 7, "name" => "Pol", "age" => 26],
                ["id" => 8, "name" => "Jordi", "age" => 27],
                ["id" => 9, "name" => "Laura", "age" => 28],
                ["id" => 10, "name" => "Marc", "age" => 29]
            ];

            echo "Array con la que voy a trabajar: <strong>";
            print_r($students);
            echo "</strong><br><br>";

            echo "<table border='1'>";
            echo "<tr><td>Id</td><td>Nombre</td><td>Edad</td></tr>";
            foreach ($students as $student) {
                echo "<tr>";
                echo "<td>" . $student['id'] . "</td>";
                echo "<td>" . $student['name'] . "</td>";
                echo "<td>" . $student['age'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

            $studentsName = array_column($students, 'name');
            echo "<br>Array con los nombres de los estudiantes: <strong>";
            print_r($studentsName);
            echo "</strong><br>";

        ?>
        
    </body>
</html>
