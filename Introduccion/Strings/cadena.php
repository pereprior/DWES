<?php

    define("mainTitle", "Funciones de Cadena");

    function checkPrefix(string $name, string $prefix) : string {

        if (strpos($name, $prefix) === 0)
            return "<br>El nombre empieza por <strong>$prefix</strong><br>";
        else
            return "<br>El nombre no empieza por <strong>$prefix</strong><br>";
    }

    function getCharsNumber(string $char, string $name) : int {
        $count = 0;

        $count += substr_count(strtoupper($name), strtoupper($char));

        return $count;
    }

    function getCharsPosition(string $char, string $name) : string {
        $position = stripos(strtolower($name), strtolower($char));

        if($position === false)
            return "No se ha encontrado el carácter <strong>$char</strong> en el nombre<br>";
        else
            return "El carácter <strong>$char</strong> se encuentra en la posición <strong>$position</strong><br>";
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
        
        <p>

            <?php

                $name = $_GET['name'] ?? "Pere";
                $prefix = $_GET['prefix'] ?? "";
                $charsToFind = "a";

                echo "Mi nombre es <strong>" . trim($name) . "</strong> <br>";
                echo "Tiene <strong>" . strlen($name) . "</strong> caracteres <br>";
                echo "En mayúsculas es <strong>" . strtoupper($name) . "</strong> y en minúsculas <strong>" . strtolower($name) . "</strong> <br>";
                
                if(!empty($prefix))
                    echo checkPrefix($name, $prefix);

                echo "Tiene <strong>" . getCharsNumber($charsToFind, $name) . "</strong> $charsToFind<br>";
                echo getCharsPosition($charsToFind, $name);

                echo str_ireplace("o", "<strong>0</strong>", $name);

            ?>

        </p>

        <br>

        <p>

            <?php

                $url = 'http://username:password@hostname:9090/path?arg=value';
                $urlArray = [
                    parse_url($url, PHP_URL_SCHEME),
                    parse_url($url, PHP_URL_USER),
                    parse_url($url, PHP_URL_PASS),
                    parse_url($url, PHP_URL_HOST),
                    parse_url($url, PHP_URL_PORT),
                    parse_url($url, PHP_URL_PATH),
                    parse_url($url, PHP_URL_QUERY)
                ];

                foreach($urlArray as $key => $value) {
                    echo "<strong>$key</strong>: $value <br>";
                }

            ?>

        </p>

    </body>
</html>
