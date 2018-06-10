<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 13.11.2017
 * Time: 08:08
 */

namespace service;

use domain\Project;

/**
 * @access public
 * @author tobias.weisskopf
 */
interface ProjectService {

    /**
     * @access public
     * @param Project project
     * @return Project
     * @ParamType project Project
     * @ReturnType Project
     */
    public function createProject(Project $project);

    /**
     * @access public
     * @param int projectId
     * @return Project
     * @ParamType projectId int
     * @ReturnType Project
     */
    public function readProject($projectId);

    /**
     * @access public
     * @param Project project
     * @return Project
     * @ParamType project Project
     * @ReturnType Project
     */
    public function updateProject(Project $project);

    /**
     * @access public
     * @param int projectId
     * @ParamType projectId int
     */
    public function deleteProject($projectId);

    /**
     * @access public
     * @return Project[]
     * @ReturnType Project[]
     */
    public function findAllProjects();
}