<?php 
require("classes/Database.php");

    echo "Dit is een Home pagina van de leerling!";

    $salt = hash('sha512', "kaneel");
    $password = hash('sha512', "kaneel" . $salt);

    $parameters = array(':naam'=>"Berta", ':wachtwoord'=>$password, ':salt'=>$salt, ':type'=>2);
    $sth = Database::prepare("INSERT INTO gebruiker (naam, wachtwoord, salt, type) VALUES (:naam, :wachtwoord, :salt, :type)");
    $sth->execute($parameters);

?>