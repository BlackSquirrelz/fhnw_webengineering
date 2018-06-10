<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 15:03
 */

namespace dao;

use database\Database;
use \PDO;


abstract class BasicDAO
{
    protected $pdoInstance;

    public function __construct(PDO $pdoInstance = null)
    {
        if(is_null($pdoInstance)) {
            $this->pdoInstance = Database::connect();
        } else {
            $this->pdoInstance = $pdoInstance;
        }
    }
}