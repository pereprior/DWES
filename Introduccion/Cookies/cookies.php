<?php

    define("mainTitle", "Cookies");

    $value = "Esto es una cookie";
    // Cookie que dura 30 días
    setcookie("DAW", $value, time() + 30 * 24 * 60 * 60);

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

        echo "Valor de la cookie: <strong>" . ($_COOKIE["DAW"] ?? "NULO") . "</strong>";

    ?>
    
</body>
</html>
