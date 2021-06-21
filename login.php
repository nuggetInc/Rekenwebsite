<?php

// if user and password are both set;
if (isset($_POST["password"], $_POST["username"])) {
    $salt = hash('sha512', $_POST["password"]);

    $password =  hash('sha512',  $_POST["password"] . $salt);

    $parameters = array(':naam' => $_POST["username"], ':wachtwoord' => $password);
    $sth = Database::prepare("SELECT id FROM gebruiker WHERE naam = :naam AND wachtwoord = :wachtwoord");
    $sth->execute($parameters);

    if ($sth->rowCount() != 0) // if user and password both exist;
    {
        $_SESSION["user_id"] = $sth->fetch()[0];
    }
    header("Location: ./");
}

?>
<div class="stylized">
    <div class="title-wraper">
        <h2>Log in</h2>
    </div>
    <div class="form-wraper">
        <form action="" method="POST">
            <input class="form-input" type="text" placeholder="Naam" name="username" required>
            <input class="form-input" type="password" placeholder="Wachtwoord" name="password" required>
            <input class="form-submit" value="Log in" type="submit">
        </form>
    </div>
</div>
    

