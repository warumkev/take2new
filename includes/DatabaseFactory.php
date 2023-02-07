<?php

class DatabaseFactory
{
    private static $dbconn = null;

    public static function getDatabaseConnection(): ?PDO
    {

        $HOST = $_ENV['POSTGRES_HOST']; // "localhost";
        $PORT = 5432;
        $DBNAME = $_ENV['POSTGRES_DB']; // "take2new";
        $USER = $_ENV['POSTGRES_USER']; // "postgres";
        $PASSWORD = $_ENV['POSTGRES_PASSWORD']; // "Passwort";

        if (self::$dbconn === null) {
            self::$dbconn = new PDO('pgsql:host=' . $HOST . ';port=' . $PORT . ';dbname=' . $DBNAME, $USER, $PASSWORD);
            self::$dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$dbconn;
    }

}
