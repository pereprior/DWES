<?php

    $language = $_GET["setLanguage"] ?? $_COOKIE["language"] ?? "es";
    setcookie("language", $language, time() + 1 * 60 * 24 * 30);

    switch($language) {
        case "en":
            $mainTitle = "Cookie Functions";
            $title = "Change the language";
            $mainLanguage = "Spanish";
            $secondaryLanguage = "English";
            $content = "This page is in English";
            break;
        case "es":
        default:
            $mainTitle = "Funciones de Cookies";
            $title = "Cambiar el idioma";
            $mainLanguage = "Español";
            $secondaryLanguage = "Inglés";
            $content = "Esta página está en Español";
            break;
    }

?>

<!DOCTYPE html>
<html lang=<?=$language?>>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Pere Prior">
        <title><?=$mainTitle?></title>
    </head>
    <body>

        <h3><?=$title?></h3>
        <ul>
            <li><a href="language.php?setLanguage=es"><?=$mainLanguage?></a></li>
            <li><a href="language.php?setLanguage=en"><?=$secondaryLanguage?></a></li>
        </ul>

        <?= $content ?>

    </body>
</html>