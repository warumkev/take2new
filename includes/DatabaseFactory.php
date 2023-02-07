<?php

class DatabaseFactory
{
    private static $dbconn = null;

    public static function getDatabaseConnection(): ?PDO
    {

        $HOST = "localhost";
        $PORT = 5432;
        $DBNAME = "take2new";
        $USER = "postgres";
        $PASSWORD = "";

        if (self::$dbconn === null) {
            self::$dbconn = new PDO('pgsql:host=' . $HOST . ';port=' . $PORT . ';dbname=' . $DBNAME, $USER, $PASSWORD);
            self::$dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$dbconn;
    }

}
