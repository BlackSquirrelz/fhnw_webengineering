<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 01.11.2017
 * Time: 13:51
 */

namespace controller;

use service\AuthServiceImpl;
use service\ProjectServiceImpl;
use view\TemplateView;
use service\EmailServiceClient;

class EmailController
{
    public static function sendMeMyProjects(){
        $emailView = new TemplateView("projectListEmail.php");
        $emailView->projects = (new ProjectServiceImpl())->findAllProjects();
        return EmailServiceClient::sendEmail(AuthServiceImpl::getInstance()->readUser()->getEmail(), "My current projects", $emailView->render());
    }
}