<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 3/31/18
 * Time: 17:29
 */

namespace database;

use \PDO;
use config\Config;

class Database
{
    private static $pdoInstance = null;

    protected function __construct()
    {
        self::$pdoInstance = new PDO (Config::pdoConfig("dsn"), Config::pdoConfig("user"), Config::pdoConfig("password"));
        self::$pdoInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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