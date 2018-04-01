<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 3/31/18
 * Time: 17:23
 */

namespace config;

class Autoloader
{
    public static function autoload($className) {
        $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
        $fileName = $className . 'php';

        if (file_exists($fileName)) {
            include_once ($fileName);
        } else {
            return false;
        }
    }
}

spl_autoload_register('config\Autoloader::autoload');