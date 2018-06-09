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
    protected $project_name;
    /**
    * @AttributeType String
    */
    protected $project_desc;
    /**
     * @AttributeType String
     *
     */
    protected $p_startdate;
    /**
     * @AttributeType String
     */
    protected $p_enddate;
    /**
     * @AssociationType int
     * @AssociationMultiplicity 1
     */
    private $userID;

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
        return $this->project_name;
    }

    /**
     * @access public
     * @param String name
     * @return void
     * @ParamType name String
     * @ReturnType void
     */
    public function setName($project_name) {
        $this->project_name = $project_name;
    }
    /**
     * @access public
     * @param String name
     * @return void
     * @ParamType name String
     * @ReturnType void
     */
    public function setDesc($project_desc) {
        $this->project_desc = $project_desc;
    }

    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getDesc() {
        return $this->project_desc;
    }
    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getStartDate() {
        return $this->p_startdate;
    }

    /**
     * @access public
     * @param integer projectStart
     * @return void
     * @ParamType projectStart integer
     * @ReturnType void
     */
    public function setStartDate($project_start) {
        $this->p_startdate = $project_start;
    }

    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getEndDate() {
        return $this->p_enddate;
    }

    /**
    @access public
     * @param integer projectEnd
     * @return void
     * @ParamType projectEnd integer
     * @ReturnType void
     */
    public function setEndDate($project_end) {
        $this->p_enddate = $project_end;
    }

    /**
     * @access public
     * @return int
     * @ReturnType int
     */
    public function getUserId() {
        return $this->userID;
    }

    /**
     * @access public
     * @param int userId
     * @return void
     * @ParamType userId int
     * @ReturnType void
     */
    public function setUserId($userID) {
        $this->userID = $userID;
    }
}