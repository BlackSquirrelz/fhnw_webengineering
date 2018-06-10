<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 22.09.2017
 * Time: 15:13
 */
namespace database;
use \PDO;
use config\Config;
class Database
{
    private static $pdoInstance = null;
    protected function __construct()
    {
        try{
            self::$pdoInstance = new PDO ("mysql://eu-cdbr-west-02.cleardb.net:3306/heroku_5b4a2ef607eb671", Config::pdoConfig("user"), Config::pdoConfig("password"));
            self::$pdoInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection failed " . $exception->getMessage();
        }
    }
    public static function connect()
    {
        if (self::$pdoInstance) {
            return self::$pdoInstance;
        }
        new self();
        return self::$pdoInstance;
    }
}