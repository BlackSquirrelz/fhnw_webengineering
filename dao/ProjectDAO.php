<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 15:15
 */

namespace dao;

use domain\Project;

///TODO: fix this for the Project Domain

class ProjectDAO extends BasicDAO {
/**
* @access public
* @param Project project
* @return Project
* @ParamType project Project
* @ReturnType Project
*/
    public function create(Project $project) {
        $stmt = $this->pdoInstance->prepare('
            INSERT INTO project (project_name, project_desc, p_startdate, p_enddate, P_USERS _ID, p_admin, p_owner)
            VALUES (:p_name, :p_desc , :p_start, :p_end, :p_admin, :p_owner);');

        $stmt->bindValue(':p_name', $project->getName());
        $stmt->bindValue(':p_desc', $project->getDesc());
        $stmt->bindValue(':p_start', $project->getStartDate());
        $stmt->bindValue(':p_end', $project->getEndDate());
        $stmt->bindValue(':p_admin', $project->getUserId());
        $stmt->bindValue(':p_owner', $project->getUserId());
        $stmt->execute();
        return $this->read($this->pdoInstance->lastInsertId());
    }

    /**
     * @access public
     * @param int projectId
     * @return Project
     * @ParamType projectId int
     * @ReturnType Project
     */
    public function read($projectId) {
        $stmt = $this->pdoInstance->prepare('
            SELECT * FROM project WHERE id = :id;');
        $stmt->bindValue(':id', $projectId);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(\PDO::FETCH_CLASS, "domain\Project")[0];
        }
        return null;
    }

    /**
     * @access public
     * @param Project project
     * @return Project
     * @ParamType project Project
     * @ReturnType Project
     */
    public function update(Project $project) {
        $stmt = $this->pdoInstance->prepare('
            UPDATE project SET project_name = :project_name,
                project_desc = :project_desc,
                p_startdate = :p_start,
                p_enddate = :p_end
            WHERE id = :id');
        $stmt->bindValue(':project_name', $project->getName());
        $stmt->bindValue(':project_desc', $project->getDesc());
        $stmt->bindValue(':p_start', $project->getStartDate());
        $stmt->bindValue(':p_end', $project->getEndDate());
        $stmt->bindValue(':id', $project->getId());
        $stmt->execute();
        return $this->read($project->getId());
    }

    /**
     * @access public
     * @param Project project
     * @ParamType project Project
     */
    public function delete(Project $project) {
        $stmt = $this->pdoInstance->prepare('
            DELETE FROM project
            WHERE id = :id
        ');
        $stmt->bindValue(':id', $project->getId());
        $stmt->execute();
    }

    /**
     * @access public
     * @param int projectId
     * @return Project[]
     * @ParamType userId int
     * @ReturnType Project[]
     */
    public function findByUser($userId) {
        $stmt = $this->pdoInstance->prepare('
            SELECT * FROM project WHERE userid = :userId ORDER BY id');
        $stmt->bindValue(':userId', $userId);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "domain\Project");
    }
}
?>