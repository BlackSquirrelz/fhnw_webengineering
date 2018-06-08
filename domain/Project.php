<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 14:19
 */

namespace domain;

///TODO: Change domain to fit with project
class Project
{
    /**
     * @AttributeType int
     */
    protected $id;
    /**
     * @AttributeType String
     */
    protected $name;
    /**
    * @AttributeType String
    */
    protected $description;
    /**
     * @AttributeType String
     *
     */
    protected $project_start;
    /**
     * @AttributeType String
     */
    protected $project_end;
    /**
     * @AssociationType int
     * @AssociationMultiplicity 1
     */
    private $projectid;

    /**
     * @AttributeType String
     */
    protected $userId;


    /**
     * @access public
     * @return int
     * @ReturnType int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @access public
     * @param int id
     * @return void
     * @ParamType id int
     * @ReturnType void
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @access public
     * @param String name
     * @return void
     * @ParamType name String
     * @ReturnType void
     */
    public function setName($name) {
        $this->name = $name;
    }
    /**
     * @access public
     * @param String name
     * @return void
     * @ParamType name String
     * @ReturnType void
     */
    public function setDesc($description) {
        $this->description = $description;
    }

    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getDesc() {
        return $this->description;
    }
    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getStartDate() {
        return $this->project_start;
    }

    /**
     * @access public
     * @param integer projectStart
     * @return void
     * @ParamType projectStart integer
     * @ReturnType void
     */
    public function setStartDate($project_start) {
        $this->project_start = $project_start;
    }

    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getEndDate() {
        return $this->project_end;
    }

    /**
    @access public
     * @param integer projectEnd
     * @return void
     * @ParamType projectEnd integer
     * @ReturnType void
     */
    public function setEndDate($project_end) {
        $this->project_end = $project_end;
    }

    /**
     * @access public
     * @return int
     * @ReturnType int
     */
    public function getUserId() {
        return $this->userId;
    }

    /**
     * @access public
     * @param int userId
     * @return void
     * @ParamType userId int
     * @ReturnType void
     */
    public function setUserId($userId) {
        $this->userId = $userId;
    }
}