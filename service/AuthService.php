<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 15:17
 */

namespace service;

use domain\User;


interface AuthService {
    /**
     * @AttributeType int
     */
    const USER_TOKEN = 1;
    /**
     * @AttributeType int
     */
    const RESET_TOKEN = 2;

    /**
     * @access public
     * @param String email
     * @param String password
     * @return boolean
     * @ParamType email String
     * @ParamType password String
     * @ReturnType boolean
     */
    public function verifyUser($username, $email, $password);

    /**
     * @access public
     * @return User
     * @ReturnType User
     */
    public function readUser();

    /**
     * @access public
     * @param string first_name
     * @param string last_name
     * @param string username
     * @param String email
     * @param String password
     * @return boolean
     * @ParamType first_name string
     * @ParamType last_name string
     * @ParamType username string
     * @ParamType email String
     * @ParamType password String
     * @ReturnType boolean
     */
    public function editUser($first_name, $last_name, $username, $email, $password);

    /**
     * @access public
     * @param String token
     * @return boolean
     * @ParamType token String
     * @ReturnType boolean
     */
    public function validateToken($token);

    /**
     * @access public
     * @param int type
     * @param String email
     * @return String
     * @ParamType type int
     * @ParamType email String
     * @ReturnType String
     */
    public function issueToken($type = self::USER_TOKEN, $email = null);
}