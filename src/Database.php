<?php 

namespace RotyPHP;

use PDO;

class Database {
    private static PDO $conn;
    private static ?string $connector;

    public static function conn() {
        try {
            self::$conn = new PDO('sqlite:'.self::$connector);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$conn;
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }

    public static function setConnector(string $path) {
        try {
            self::$connector = $path;
            return true;
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }

    public static function getConnector() {
        return self::$connector;
    }
}