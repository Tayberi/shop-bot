<?php

namespace app\components;

use PDO;
use PDOException;

class Database
{
    public static function connect(): PDO
    {
        ;
        $host = '127.0.0.1';
        $database = 'shop_bot';
        $user = 'root';
        $password = 'root';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$database;charset=$charset";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $pdo = new PDO($dsn, $user, $password, $options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }

        return $pdo;
    }
}