<?php

    define("mainTitle", "Funciones de Cookies");

    $theme = $_GET["theme"] ?? $_COOKIE["theme"] ?? "light";
    setcookie("theme", $theme, time() + 100 * 60 * 24 * 30);

    switch ($theme) {
        case "dark":
            $background = "black";
            $color = "white";
            break;
        case "light":
        default:
            $background = "white";
            $color = "black";
            break;
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Pere Prior">
        <title><?=mainTitle?></title>
        <style>
            body {
                background-color: <?=$background?>;
                color: <?=$color?>;
            }
        </style>
    </head>
    <body>

        <h3>Pulsa el enlace para cambiar el tema de la pagina</h3>
        <a href="lightDark.php?theme=dark">Tema oscuro</a>
        <a href="lightDark.php?theme=light">Tema claro</a>

    </body>
</html>