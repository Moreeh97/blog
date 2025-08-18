<?php

namespace App\Core;

use PDO;
use PDOException;

final class App
{
    private static ?PDO $pdo = null;
    
private static function loadEnv(): array
{
$envPath = __DIR__ . '/../../.env';
$vars = [];
if (file_exists($envPath)) {
$lines = file($envPath, FILE_IGNORE_NEW_LINES |
FILE_SKIP_EMPTY_LINES);
foreach ($lines as $line) {
[$key, $value] = explode("=", $line, 2);

$vars[trim($key)] = trim($value);

}
}
return $vars;
}
public static function env(string $key, $default = null)
{
return self::$config[$key] ?? $default;
}


    public static function init(): void
    {
        if (self::$pdo === null) {
            try {
            
                
                self::$pdo = new PDO(
                    'mysql:host=localhost;dbname=blog;charset=utf8',
                    'root',
                    '',
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    ]
                );
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }
        }
    }

    public static function db(): PDO
    {
        if (self::$pdo === null) {
            self::init();
        }

        return self::$pdo;
    }
}
