<?php

$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : null;

?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Rekenwebsite</title>
</head>

<body>
    <header class="page-header">
        <nav class="page-nav">
            <!-- depends on logged in and page -->
            <ul class="nav-list">
                <li><a class="nav-item active" href="">home</a></li>
                <li><a class="nav-item" href="">home</a></li>
                <li><a class="nav-item" href="">home</a></li>
                <li><a class="nav-item" href="">home</a></li>
            </ul>
        </nav>
        <h2 class="page-name">
            <!-- name of the logged in user -->
            Nugget
        </h2>
        <h1>
            <a class="page-title" href="./">REKENWEBSITE</a>
        </h1>
    </header>
    <main class="page-content">
        <?php

        // switch ($pagina) {
        //     case "login":
        //         require("./login.php");
        //         break;
        //     default:"); // On first load, when no page is selected.
        // }
        //         require("./login.php

        ?>
    </main>
</body>

</html>
