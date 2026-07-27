<?php 

namespace RotyPHP;

use Exception;
use PDO;
use RotyPHP\abstracts\Driver;

class RotyDatabase {
    private static ?PDO $pdo;
    private static Driver $connector;

    public static function conn() {
        try {
            
            if (isset(self::$connector)) {
                self::$pdo = self::getConnector()->getPDO();
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            }

            return self::$pdo ?? null;
        } catch (\Throwable $e) {
            throw new Exception($e->getMessage());
        }
    }

    public static function setConnector(Driver $driver) {
        try {
            self::$connector = $driver;
            return true;
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }

    public static function getConnector() {
        return self::$connector;
    }
}