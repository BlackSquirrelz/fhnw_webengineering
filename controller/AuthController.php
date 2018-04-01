<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 13:19
 */

namespace controller;

use service\AuthServiceImpl;


class AuthController
{
    public static function authenticate(){
        if(isset($_SESSION["userLogin"])){
            if(AuthServiceImpl::getInstance()->validateToken($_SESSION["userLogin"]["token"])){
                return true;
            }
        }
        if(isset($_COOKIE["token"])){
            if(AuthServiceImpl::getInstance()->validateToken($_COOKIE["token"])) {
                return true;
            }
        }
        return false;
    }

    public static function login(){
        $authService = AuthServiceImpl::getInstance();
        if($authService->verifyUser($_POST["email"],$_POST["password"]))
        {
            $token = $authService->issueToken();
            $_SESSION["userLogin"]["token"] = $token;
            if(isset($_POST["remember"])) {
                setcookie("token", $token, (new \DateTime('now'))->modify('+30 days')->getTimestamp(), "/");
            }
        }
    }

    public static function logout(){
        session_destroy();
        setcookie("token", "", time() - 3600, "/");
    }

}