<?php

class Database
{
    private static $pdo;

    private static function getPdo()
    {
        if (!isset(Database::$pdo))
            Database::$pdo =  new PDO("mysql:host=localhost;dbname=Rekenwebsite", "root", "");

        return Database::$pdo;
    }

    public static function prepare($query)
    {
        return Database::getPdo()->prepare($query);
    }
}
