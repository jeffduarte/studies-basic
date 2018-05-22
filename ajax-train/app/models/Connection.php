<?php



namespace App\Models;

use PDO;


class Connection 
{
    public static function connection () 
    {
        $pdo = new PDO("mysql:host=localhost;dbname=users","root","password");
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $pdo;
    }
}