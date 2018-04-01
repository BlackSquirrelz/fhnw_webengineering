<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 14:20
 */

namespace domain;


class User
{
    /**
     * @AttributeType int
     */
    private $id;
    /**
     * @AttributeType String
     */
    private $first_name;
    /**
     * @AttributeType String
     */
    private $last_name;
    /**
     * @AttributeType String
     */
    private $username;
    /**
     * @AttributeType String
     */
    private $email;
    /**
     * @AttributeType String
     */
    private $password;
    /**
     * @AssociationType Customer[]
     * @AssociationMultiplicity 0..*
     */
    private $customer;

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
    public function getFirstName() {
        return $this->first_name;
    }

    /**
     * @access public
     * @param String name
     * @return void
     * @ParamType name String
     * @ReturnType void
     */
    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }

    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getLastName() {
        return $this->last_name;
    }

    /**
     * @access public
     * @param String name
     * @return void
     * @ParamType name String
     * @ReturnType void
     */
    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getUserName() {
        return $this->username;
    }

    /**
     * @access public
     * @param String name
     * @return void
     * @ParamType name String
     * @ReturnType void
     */
    public function setUserName($username) {
        $this->username = $username;
    }

    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @access public
     * @param String email
     * @return void
     * @ParamType email String
     * @ReturnType void
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @access public
     * @param String password
     * @return void
     * @ParamType password String
     * @ReturnType void
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * @access public
     * @return Customer[]
     * @ReturnType Customer[]
     */
    public function getCustomer() {
        return $this->customer;
    }

    /**
     * @access public
     * @param Customer[] customer
     * @return void
     * @ParamType customer Customer[]
     * @ReturnType void
     */
    public function setCustomer(array $customer) {
        $this->customer = $customer;
    }
}