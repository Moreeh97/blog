<?php
    
class LoggerFactory {
public static function create(string $type): Logger {
switch ($type) {
case 'file':
return new FileLogger();
case 'database':
return new DatabaseLogger();
default:
throw new \InvalidArgumentException("Unknown logger type: $type");
}
}}