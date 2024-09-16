<?php

    define("mainTitle", "Funciones de Password");

    function rand_Pass(int $upper = 1, int $lower = 5, int $numeric = 3, int $other = 2){
        $passwd = "";

        for ($i = 0; $i < $upper; $i++) {
            $passwd .= chr(rand(65, 90));
        }

        for ($i = 0; $i < $lower; $i++) {
            $passwd .= chr(rand(97, 122));
        }

        for ($i = 0; $i < $numeric; $i++) {
            $passwd .= chr(rand(48, 57));
        }

        for ($i = 0; $i < $other; $i++) {
            $passwd .= chr(rand(33, 47));
        }

        return str_shuffle($passwd);
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

            echo "Contraseña generada: <strong>" . rand_Pass() . "</strong>";

        ?>

    </body>
</html>