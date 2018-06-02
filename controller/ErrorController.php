<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 13:01
 */

namespace controller;
use view\TemplateView;


class ErrorController
{
    public static function show404() {
        echo(new TemplateView("404.php")) ->render();
    }
}