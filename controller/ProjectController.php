<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 13:34
 */

namespace controller;

use domain\Project;
use validator\ProjectValidator;
use service\ProjectServiceImpl;
use view\TemplateView;
use view\LayoutRendering;

class ProjectController
{
    public static function create(){
        $contentView = new TemplateView("projectCreate.php");
        LayoutRendering::basicLayout($contentView);
    }
    public static function readAll(){
        $contentView = new TemplateView("allprojects.php");
        $contentView->projects = (new ProjectServiceImpl())->findAllProjects();
        LayoutRendering::basicLayout($contentView);
    }
    public static function edit(){
        $id = $_GET["id"];
        $contentView = new TemplateView("projectCreate.php");
        $contentView->project = (new ProjectServiceImpl())->readProject($id);
        LayoutRendering::basicLayout($contentView);
    }
    public static function update(){
        $project = new Project();
        $project->setId($_POST["id"]);
        $project->setName($_POST["project_name"]);
        $project->setDesc($_POST["project_desc"]);
        $project->setStartDate($_POST["p_startdate"]);
        $project->setEndDate($_POST["p_enddate"]);
        $project->setUserId($_POST["p_users_id"]);
        $project->setUserId($_POST["p_admin"]);
        $project->setUserId($_POST["p_owner"]);
        $projectValidator = new ProjectValidator($project);
        if($projectValidator->isValid()) {
            if ($project->getId() === "") {
                (new ProjectServiceImpl())->createProject($project);
            } else {
                (new ProjectServiceImpl())->updateProject($project);
            }
        }
        else{
            $contentView = new TemplateView("projectCreate.php");
            $contentView->project = $project;
            $contentView->projectValidator  = $projectValidator;
            LayoutRendering::basicLayout($contentView);
            return false;
        }
        return true;
    }
    public static function delete(){
        $id = $_GET["id"];
        (new ProjectServiceImpl())->deleteProject($id);
    }
}