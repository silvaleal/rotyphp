<?php 

namespace Src;

use PDO;

class Database {
    private static PDO $conn;

    public static function conn() {
        try {
            self::$conn = new PDO('sqlite:'.getcwd().'/database.db');
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$conn;
            
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }
}