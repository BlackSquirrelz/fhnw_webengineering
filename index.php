<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 12.09.2017
 * Time: 21:30
 */

/**
 * Adapted for the use in the Timecatcher Project
 */
require_once("config/Autoloader.php");

use router\Router;
use controller\ProjectController;
use controller\UserController;
use controller\AuthController;
use controller\ErrorController;
use controller\UserPasswordResetController;
use controller\EmailController;
use controller\PDFController;
use service\ServiceEndpoint;
use http\HTTPException;
use http\HTTPHeader;
use http\HTTPStatusCode;

session_start();

//var_dump(getenv('driver').getenv('host').getenv('user').getenv('password'));

$authFunction = function () {
    if (AuthController::authenticate())
        return true;
    Router::redirect("/login");
    return false;
};


Router::route("GET", "/home", function () {
    UserController::homeView();
});


Router::route("GET", "/login", function () {
    UserController::loginView();
});

Router::route("GET", "/register", function () {
    UserController::registerView();
});

Router::route("POST", "/register", function () {
    if(UserController::register())
        Router::redirect("/logout");
});

Router::route("POST", "/login", function () {
    AuthController::login();
    Router::redirect("/allprojects");
});

Router::route("GET", "/logout", function () {
    AuthController::logout();
    Router::redirect("/");
});

// Additional Pages like who who we are, projects, features

Router::route("GET", "/whoweare", function () {
    UserController::whowerareView();
});

Router::route("GET", "/features", function () {
    UserController::featureView();
});
Router::route("GET", "/pricing", function () {
    UserController::pricingView();
});

Router::route("POST", "/password/request", function () {
    UserPasswordResetController::resetEmail();
    Router::redirect("/login");
});

Router::route("GET", "/password/request", function () {
    UserPasswordResetController::requestView();
});

Router::route("POST", "/password/reset", function () {
    UserPasswordResetController::reset();
    Router::redirect("/login");
});

Router::route("GET", "/password/reset", function () {
    UserPasswordResetController::resetView();
});

Router::route_auth("GET", "/profile", $authFunction, function () {
    UserController::profileView();
});

Router::route("GET", "/pricing", function () {
    UserController::pricingView();
});

Router::route_auth("GET", "/projects", $authFunction, function () {
    UserController::projectView();
});

Router::route_auth("GET", "/create",$authFunction, function () {
    UserController::createProjectView();
});

Router::route_auth("GET", "/allprojects", $authFunction,function () {
    ProjectController::readAll();
});

Router::route_auth("GET", "/", $authFunction, function () {
    ProjectController::readAll();
});

Router::route_auth("GET", "/user/edit", $authFunction, function () {
    UserController::editView();
});

Router::route_auth("POST", "/user/edit", $authFunction, function () {
    if(UserController::update())
        Router::redirect("/logout");
});

Router::route_auth("POST", "/profile/update", $authFunction, function () {
    if(UserController::update())
        Router::redirect("/");
});

Router::route_auth("POST", "/project/create", $authFunction, function () {
    var_dump('Project Create goes here.... (update) then:')
    if(ProjectController::update())
        Router::redirect("/allprojects");
});

Router::route_auth("GET", "/project/create", $authFunction, function () {
    var_dump("GET Project called");
    if(ProjectController::create())
        Router::redirect("/allprojects");
});

Router::route_auth("GET", "/project/edit", $authFunction, function () {
    ProjectController::edit();
});

Router::route_auth("GET", "/project/delete", $authFunction, function () {
    ProjectController::delete();
    Router::redirect("/");
});

Router::route_auth("POST", "/project/update", $authFunction, function () {
    if(ProjectController::update())
        Router::redirect("/");
});

Router::route_auth("GET", "/project/email", $authFunction, function () {
    EmailController::sendMeMyProjects();
    Router::redirect("/");
});

Router::route_auth("GET", "/project/pdf", $authFunction, function () {
    PDFController::generatePDFProjects();
});

$authAPIBasicFunction = function () {
    if (ServiceEndpoint::authenticateBasic())
        return true;
    Router::errorHeader();
    return false;
};

Router::route_auth("GET", "/api/token", $authAPIBasicFunction, function () {
    ServiceEndpoint::loginBasicToken();
});

$authAPITokenFunction = function () {
    if (ServiceEndpoint::authenticateToken())
        return true;
    Router::errorHeader();
    return false;
};

Router::route_auth("HEAD", "/api/token", $authAPITokenFunction, function () {
    ServiceEndpoint::validateToken();
});

Router::route_auth("GET", "/api/project", $authAPITokenFunction, function () {
    ServiceEndpoint::findAllProjects();
});

Router::route_auth("GET", "/api/project/{id}", $authAPITokenFunction, function ($id) {
    ServiceEndpoint::readProject($id);
});

Router::route_auth("PUT", "/api/project/{id}", $authAPITokenFunction, function ($id) {
    ServiceEndpoint::updateProject($id);
});

Router::route_auth("POST", "/api/project", $authAPITokenFunction, function () {
    ServiceEndpoint::createProject();
});

Router::route_auth("DELETE", "/api/project/{id}", $authAPITokenFunction, function ($id) {
    ServiceEndpoint::deleteProject($id);
});

try {
    HTTPHeader::setHeader("Access-Control-Allow-Origin: *");
    HTTPHeader::setHeader("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS, HEAD");
    HTTPHeader::setHeader("Access-Control-Allow-Headers: Authorization, Location, Origin, Content-Type, X-Requested-With");
    if($_SERVER['REQUEST_METHOD']=="OPTIONS") {
        HTTPHeader::setStatusHeader(HTTPStatusCode::HTTP_204_NO_CONTENT);
    } else {
        Router::call_route($_SERVER['REQUEST_METHOD'], $_SERVER['PATH_INFO']);
    }
} catch (HTTPException $exception) {
    $exception->getHeader();
    ErrorController::show404();
}