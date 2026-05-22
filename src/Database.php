<?php 

namespace RotyPHP;

use PDO;

class Database {
    private static ?PDO $pdo;
    private static ?string $connector;

    public static function conn() {
        try {
            
            if (isset(self::$connector)) {
                self::$pdo = new PDO('sqlite:'.self::getConnector());
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            }

            return self::$pdo ?? null;
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