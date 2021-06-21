<?php

require("./classes/Database.php");
session_start();

$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : null;

$loggedIn = isset($_SESSION["user_id"]);

if ($loggedIn) {
    $parameters = array(":id" => $_SESSION["user_id"]);
    $sth = Database::prepare("SELECT naam FROM gebruiker WHERE id = :id");
    $sth->execute($parameters);

    $loggedInUser = $sth->fetch();
}

?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/login.css">
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
        <?= $loggedIn ?  "<h2 class='page-name'>{$loggedInUser['naam']}</h2>" : null ?>
        <h1>
            <a class="page-title" href="./">REKENWEBSITE</a>
        </h1>
    </header>
    <main class="page-content">
        <?php

        switch ($pagina) {
            case "login":
                require("./login.php");
                break;
            default:
                require("./login.php"); // On first load, when no page is selected.
                break;
        }

        ?>
    </main>
</body>

</html>
