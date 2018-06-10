<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 15:38
 */

namespace controller;

use service\AuthServiceImpl;
use service\ProjectServiceImpl;
use validator\UserValidator;
use view\TemplateView;
use domain\User;
use view\LayoutRendering;



class UserController
{
    public static function editView(){
        $view = new TemplateView("userEdit.php");
        $view->user = AuthServiceImpl::getInstance()->readUser();
        $view->pageTitle = "WE-TimeCatcher";
        $view->pageHeading = "<strong>TimeCatcher | Update</strong> your account.";
        $view->pageSubmitText = "Update";
        $view->pageFormAction = "/user/edit";
        echo $view->render();
    }

    public static function homeView(){
        echo (new TemplateView("home.php"))->render();
    }

    public static function registerView(){
        echo (new TemplateView("userEdit.php"))->render();
    }

    public static function pricingView(){
        echo (new TemplateView("pricing.php"))->render();
    }

    public static function whowerareView() {
        echo (new TemplateView("whowerare.php"))->render();
    }

    public static function featureView(){
        echo (new TemplateView("features.php"))->render();
    }

    public static function createProjectView(){
        echo (new TemplateView("projectCreate.php"))->render();
    }

    public static function profileView(){
        $contentView = new TemplateView("profile.php");
        $contentView->user = (AuthServiceImpl::getInstance()->readUser());
        LayoutRendering::basicLayout($contentView);
    }

    public static function projectView(){
        $contentView = new TemplateView("projects.php");
        $contentView->user = (AuthServiceImpl::getInstance()->readUser());
        $contentView->projects = (new ProjectServiceImpl())->findAllProjects();
        LayoutRendering::basicLayout($contentView);
    }

    public static function loginView(){
        echo (new TemplateView("userLogin.php"))->render();
    }

    public static function update(){
        $view = new TemplateView("userEdit.php");
        $view->pageTitle = "TimeCatcher";
        $view->pageHeading = "<strong>TimeCatcher | Update</strong> your account.";
        $view->pageSubmitText = "Update";
        $view->pageFormAction = "/user/edit";
        return self::register($view);
    }

    public static function register($view = null){
        $user = new user();
        $user->setFirstName($_POST["first_name"]);
        $user->setLastName($_POST["last_name"]);
        $user->setUserName($_POST["username"]);
        $user->setEmail($_POST["email"]);
        $user->setPassword($_POST["password"]);
        $userValidator = new userValidator($user);
        if($userValidator->isValid()){
            if(AuthServiceImpl::getInstance()->edituser($user->getUserName(), $user->getFirstName(),$user->getLastName(), $user->getEmail(), $user->getPassword())){
                return true;
            }else {
                $userValidator->setEmailError("Email already exists");
                //$userValidator->setUsernameError("This username is already taken");
            }
        }
        $user->setPassword("");
        if (is_null($view))
            $view = new TemplateView("userEdit.php");
        $view->user = $user;
        $view->userValidator = $userValidator;
        echo $view->render();
        return false;
    }


}