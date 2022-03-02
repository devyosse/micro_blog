<?php

namespace App\Model;
use App\Model\Config;

class DB {
    private static ?PDO $pdoObject = null;
    private static string $dsn = "mysql:host=%s;dbname=%s;charset=%s";

    public function getPDO(): PDO{
        if (self::$pdoObject === null){
            try {
                $dsn = sprintf(self::$dsn, Config::DB_HOST, Config::DB_NAME, Config::DB_CHARSET);
                self::$pdoObject = new PDO($dsn, Config::DB_USERNAME, Config::DB_PASSWORD);
                self::$pdoObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e){
                die($e->getMessage());
            }
        }
        return self::$pdoObject;
    }
}