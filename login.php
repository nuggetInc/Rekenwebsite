<?php session_start();


// if user and password are both set;
if (isset($_POST["password"], $_POST["username"]))
{
    $salt = hash('sha512', $_POST["password"]);

    $password =  hash('sha512',  $_POST["password"] . $salt);


    $parameters = array(':naam' => $_POST["username"], ':wachtwoord' => $password);
    $sth = Database::prepare("SELECT id FROM gebruiker WHERE naam = :naam AND wachtwoord = :wachtwoord");
    $sth->execute($parameters);


    if ($sth->rowCount() != 0) // if user and password both exist;
    {
        $_SESSION["user_salt"] = $salt;
        echo "BOB";
    }
    // header("Location: ./");
}

?>
<form action="" method="POST">
    <input type="text" placeholder="Naam" name="username" required>
    <input type="password" placeholder="Wachtwoord" name="password" required>
    <input type="submit">
</form>
