<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 13.11.2017
 * Time: 08:09
 */
/**
 * Updated by PhpStorm.
 * User: blacksquirrelz
 * Date: 08.06.2018
 * Time: 19:55
 */

namespace service;

use domain\Project;
use dao\ProjectDAO;
use http\HTTPException;
use http\HTTPStatusCode;

class ProjectServiceImpl implements ProjectService
{
    /**
     * @access public
     * @param Project project
     * @return Project
     * @ParamType project Project
     * @ReturnType Project
     * @throws HTTPException
     */
    public function createProject(Project $project) {
        var_dump('Create Project Called');
        if(AuthServiceImpl::getInstance()->verifyAuth()) {
            $projectDAO = new ProjectDAO();
            $project->setUserId(AuthServiceImpl::getInstance()->getCurrentUserId());
            return $projectDAO->create($project);
        }
        throw new HTTPException(HTTPStatusCode::HTTP_401_UNAUTHORIZED);
    }

    /**
     * @access public
     * @param int projectId
     * @return Project
     * @ParamType projectId int
     * @ReturnType Project
     * @throws HTTPException
     */
    public function readProject($projectId) {
        if(AuthServiceImpl::getInstance()->verifyAuth()) {
            $projectDAO = new ProjectDAO();
            return $projectDAO->read($projectId);
        }
        throw new HTTPException(HTTPStatusCode::HTTP_401_UNAUTHORIZED);
    }

    /**
     * @access public
     * @param Project project
     * @return Project
     * @ParamType project Project
     * @ReturnType Project
     * @throws HTTPException
     */
    public function updateProject(Project $project) {
        if(AuthServiceImpl::getInstance()->verifyAuth()) {
            $projectDAO = new ProjectDAO();
            return $projectDAO->update($project);
        }
        throw new HTTPException(HTTPStatusCode::HTTP_401_UNAUTHORIZED);
    }

    /**
     * @access public
     * @param int $projectId
     * @ParamType projectId int
     */
    public function deleteProject($projectId) {
        if(AuthServiceImpl::getInstance()->verifyAuth()) {
            $projectDAO = new ProjectDAO();
            $project = new Project();
            $project->setId($projectId);
            $projectDAO->delete($project);
        }
    }

    /**
     * @access public
     * @return Project[]
     * @ReturnType Project[]
     * @throws HTTPException
     */
    public function findAllProjects() {
        if(AuthServiceImpl::getInstance()->verifyAuth()){
            $projectDAO = new ProjectDAO();
            return $projectDAO->findByUser(AuthServiceImpl::getInstance()->getCurrentUserId());
        }
        throw new HTTPException(HTTPStatusCode::HTTP_401_UNAUTHORIZED);
    }
}