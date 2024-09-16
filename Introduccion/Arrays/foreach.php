<?php

    define("mainTitle", "Funciones de Foreach");

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

            $color = array('blanco', 'verde', 'rojo');
            $colorRef = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' =>'rojo.html');

            echo "<ul>";
            foreach ($color as $value) {
                // Las barras se ponen para que las comillas dobles no se interpreten como el final de la cadena
                echo "<li><a href=\"{$colorRef[$value]}\">$value</a></li>";
            }
            echo "</ul>";

        ?>

    </body>
</html>