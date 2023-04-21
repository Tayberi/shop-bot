<?php

namespace app\models;

use app\components\Database;

class Orders
{
    public static function add($data)
    {
        $pdo = Database::connect();
    }

}