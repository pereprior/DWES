<?php

    define("mainTitle", "Funciones de Filtrar");

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

            $isDomain = false;
            $input = $_GET['dominio'] ?? '';
            $contactos = array(
                array("codigo" => 1, "nombre" => "Juan Pérez",
                "telefono" => "966112233", "email" => "juanp@gmail.com"),
                array("codigo" => 2, "nombre" => "Ana López",
                "telefono" => "965667788", "email" => "anita@hotmail.com"),
                array("codigo" => 3, "nombre" => "Mario Montero",
                "telefono" => "965929190", "email" => "mario.mont@gmail.com"),
                array("codigo" => 4, "nombre" => "Laura Martínez",
                "telefono" => "611223344", "email" => "lm2000@gmail.com"),
                array("codigo" => 5, "nombre" => "Nora Jover",
                "telefono" => "638765432", "email" => "norajover@hotmail.com"),
            );
            

            if($input != '') {

                foreach($contactos as $contacto) {
                    $domain = explode('@', $contacto['email'])[1];
                    $domain = explode('.', $domain)[0];

                    if($domain == $input) {
                        echo '<pre>' . print_r($contacto) . '</pre>';
                        $isDomain = true;
                    }
                }
            }

            if(!$isDomain)
                echo "No se ha encontrado ningún contacto con ese dominio";

        ?>

    </body>
</html>