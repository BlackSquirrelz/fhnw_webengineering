<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 13.10.2017
 * Time: 11:50
 */
/**
 * Updated by PhpStorm.
 * User: blacksquirrelz
 * Date: 06.05.2018
 * Time: 21:30
 */

namespace service;

use domain\Project;
use validator\ProjectValidator;
use http\HTTPStatusCode;
use http\HTTPHeader;

class ServiceEndpoint
{

    public static function authenticateToken(){
        if (isset($_SERVER["HTTP_AUTHORIZATION"])){
            if(strripos($_SERVER["HTTP_AUTHORIZATION"], " ")){
                list($type, $data) = explode(" ", $_SERVER["HTTP_AUTHORIZATION"], 2);
                if (strcasecmp($type, "Bearer") == 0) {
                    if(AuthServiceImpl::getInstance()->validateToken($data)) {
                        return true;
                    }
                }
            }
        }
        return false;
    }

    public static function authenticateBasic(){
        if (isset($_SERVER["HTTP_AUTHORIZATION"])){
            if(strripos($_SERVER["HTTP_AUTHORIZATION"], " ")) {
                list($type, $data) = explode(" ", $_SERVER["HTTP_AUTHORIZATION"], 2);
                if (strcasecmp($type, "Basic") == 0) {
                    list($name, $password) = explode(':', base64_decode($data));
                    if (AuthServiceImpl::getInstance()->verifyAgent($name, $password)) {
                        return true;
                    }
                }
            }
        }
        return false;
    }

    public static function loginBasicToken(){
        $authService = AuthServiceImpl::getInstance();
        HTTPHeader::setHeader("Authorization: " . $authService->issueToken(), HTTPStatusCode::HTTP_204_NO_CONTENT, false);
    }

    public static function validateToken(){
        HTTPHeader::setStatusHeader(HTTPStatusCode::HTTP_202_ACCEPTED);
    }

    public static function findAllProjects(){
        $responseData = (new ProjectServiceImpl())->findAllProjects();
        HTTPHeader::setHeader("Content-Type: application/json", HTTPStatusCode::HTTP_200_OK, true);
        echo json_encode($responseData);
    }

    public static function readProject($id){
        $responseData = (new ProjectServiceImpl())->readProject($id);
        HTTPHeader::setHeader("Content-Type: application/json", HTTPStatusCode::HTTP_200_OK, true);
        echo json_encode($responseData);
    }

    public static function updateProject($projectId = null){
        $requestData = json_decode(file_get_contents("php://input"), true);
        $project = Project::Deserialize($requestData);
        $projectValidator = new ProjectValidator($project);
        if($projectValidator->isValid()) {
            if (is_null($projectId)) {
                $project = (new ProjectServiceImpl())->createProject($project);
                $location = $GLOBALS["ROOT_URL"] . $_SERVER['PATH_INFO'] . $project->getId();
                HTTPHeader::setHeader("Location: " . $location, HTTPStatusCode::HTTP_201_CREATED, true);
            } else {
                $project->setId($projectId);
                (new ProjectServiceImpl())->updateProject($project);
                HTTPHeader::setStatusHeader(HTTPStatusCode::HTTP_204_NO_CONTENT);
            }
        }
        else{
            return false;
        }
        return true;
    }

    public static function createProject(){
        return self::updateProject();
    }

    public static function deleteProject($id){
        (new ProjectServiceImpl())->deleteProject($id);
        HTTPHeader::setStatusHeader(HTTPStatusCode::HTTP_204_NO_CONTENT);
    }

}