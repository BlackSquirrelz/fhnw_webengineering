<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 14:18
 */

namespace domain;

/**
 * @access public
 * @author blacksquirrelz
 */
class AuthToken
{
    /**
     * @AttributeType int
     */
    private $id;
    /**
     * @AttributeType String
     */
    private $selector;
    /**
     * @AttributeType String
     */
    private $validator;
    /**
     * @AttributeType String
     */
    private $expiration;
    /**
     * @AssociationType int
     * @AssociationMultiplicity 1
     */
    private $user_id;
    /**
     * @AttributeType int
     */
    private $type;

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
    public function getSelector() {
        return $this->selector;
    }

    /**
     * @access public
     * @param String selector
     * @return void
     * @ParamType selector String
     * @ReturnType void
     */
    public function setSelector($selector) {
        $this->selector = $selector;
    }

    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getValidator() {
        return $this->validator;
    }

    /**
     * @access public
     * @param String validator
     * @return void
     * @ParamType validator String
     * @ReturnType void
     */
    public function setValidator($validator) {
        $this->validator = $validator;
    }

    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getExpiration() {
        return $this->expiration;
    }

    /**
     * @access public
     * @param String expiration
     * @return void
     * @ParamType expiration String
     * @ReturnType void
     */
    public function setExpiration($expiration) {
        $this->expiration = $expiration;
    }

    /**
     * @access public
     * @return int
     * @ReturnType int
     */
    public function getUserId() {
        return $this->user_id;
    }

    /**
     * @access public
     * @param int user_id
     * @return void
     * @ParamType user_id int
     * @ReturnType void
     */
    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    /**
     * @access public
     * @return int
     * @ReturnType int
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @access public
     * @param int type
     * @return void
     * @ParamType type int
     * @ReturnType void
     */
    public function setType($type) {
        $this->type = $type;
    }

}