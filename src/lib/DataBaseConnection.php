<?php
namespace Application\Lib\Database;
require_once('/var/www/html/newDonkeyCar/src/config/config.php');

class DatabaseConnection
{
    public static function getDataBase()
    {
        try {
            return new \PDO(DB_DSN, DB_USER, DB_PASS);
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            require('templates/error.php');
        }
        
    } 
}