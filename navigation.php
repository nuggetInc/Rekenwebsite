<?php

$loggedIn = isset($_SESSION["user_id"]);

$type = $loggedIn ? $loggedInUser["type"] : -1;

// if ($loggedIn) {
//     $parameters = array(":id" => $_SESSION["user_id"]);
//     $sth = Database::prepare("SELECT type FROM gebruiker WHERE id = :id");
//     $sth->execute($parameters);

//     $loggedInUser = $sth->fetch();

//     $type = $loggedInUser["type"];
// }

$parameters = array(":type" => $type);
$sth = Database::prepare("SELECT menu_item, pagina FROM navigatie WHERE type = :type");
$sth->execute($parameters);

$str = "<ul class='nav-list'>";

for ($i = 0; $i < $sth->rowCount(); $i++) {
    $item = $sth->fetch();
    $str .= "<li><a class='nav-item' href='?pagina={$item['pagina']}'>{$item['menu_item']}</a></li>";
}

$str .= "</ul>";

echo $str;
