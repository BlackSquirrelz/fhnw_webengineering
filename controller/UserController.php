<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 15:38
 */

namespace controller;

use service\AuthServiceImpl;
use validator\UserValidator;
use view\TemplateView;
use domain\User;



class UserController
{
    public static function editView(){
        $view = new TemplateView("userEdit.php");
        $view->user = AuthServiceImpl::getInstance()->readUser();
        $view->pageTitle = "TimeCatcher";
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

    public static function featureView(){
        echo (new TemplateView("features.php"))->render();
    }

    public static function allProjectsView(){
        echo (new TemplateView("allProjects.php"))->render();
    }

    public static function createProjectView(){
        echo (new TemplateView("projectCreate.php"))->render();
    }

    public static function profileView(){
        echo (new TemplateView("profile.php"))->render();
    }

    public static function projectView(){
        echo (new TemplateView("projects.php"))->render();
    }

    public static function settingsView(){
        echo (new TemplateView("settings.php"))->render();
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
            if(AuthServiceImpl::getInstance()->edituser($user->getFirstName(),$user->getLastName(),$user->getUserName(), $user->getEmail(), $user->getPassword())){
                return true;
            }else{
                $userValidator->setEmailError("Email already exists");
                $userValidator->setUsernameError("This username is already taken");
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

    public static function loginView(){
        echo (new TemplateView("userLogin.php"))->render();
    }
}