<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Rekenwebsite</title>
</head>

<body>
    <?php

    $pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : null;

    switch ($pagina) {
        case "login":
            require("./login.php");
            break;
        default:
            require("./login.php"); // On first load, when no page is selected.
    }

    ?>
</body>

</html>
