<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 3/31/18
 * Time: 17:21
 */

require_once("config/Autoloader.php");
require_once("view/layout.php");
require_once("config/Config.php");

use router\Router;

session_start();

$_SESSION["key"] = "value";

echo "session Key: " . $_SESSION["key"] ;

$authFunction =  function () {
    if (isset($_SESSION["userLogin"])) {
        return true;
    }
    Router::redirect("/login");
    return false;
};

$errorFunction = function () {
    Router::errorHeader();
    require_once("view/404.php");
};

    Router::route("GET","/login", function(){
        require_once("view/userLogin.php");
    });

   Router::route("GET", "/register", function(){
        require_once("view/userEdit.php");
    });


Router::call_route($_SERVER['REQUEST_METHOD'],$_SERVER['PATH_INFO'],$errorFunction);

