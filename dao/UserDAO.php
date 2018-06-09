<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 14:21
 */

namespace dao;

use domain\User;

/**
 * @access public
 * @author blacksquirrelz
 */
class UserDAO extends BasicDAO {

    /**
     * @access public
     * @param User user
     * @return User
     * @ParamType user User
     * @ReturnType User
     */
    public function create(User $user) {
        $stmt = $this->pdoInstance->prepare('
            INSERT INTO user (first_name, last_name, username, email, password)
SELECT :first_name,:last_name, :username,:email,:password');
        $stmt->bindValue(':first_name', $user->getFirstName());
        $stmt->bindValue(':last_name', $user->getLastName());
        $stmt->bindValue(':username', $user->getUserName());
        $stmt->bindValue(':email', $user->getEmail());
        $stmt->bindValue(':emailExist', $user->getEmail());
        $stmt->bindValue(':password', $user->getPassword());
        $stmt->execute();
        return $this->read($this->pdoInstance->lastInsertId());
    }

    /**
     * @access public
     * @param int userId
     * @return User
     * @ParamType userId int
     * @ReturnType User
     */

    public function read($userId){
        $stmt = $this->pdoInstance->prepare('SELECT * FROM user WHERE id = :id;');
        $stmt->bindValue(':id', $userId);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(\PDO::FETCH_CLASS, "domain\User")[0];
        }
        return null;
    }

    /**
     * @access public
     * @param User user
     * @return User
     * @ParamType user User
     * @ReturnType User
     */
    public function update(User $user) {
        $stmt = $this->pdoInstance->prepare('
                UPDATE user SET first_name=:first_name,last_name=:last_name, username=:username, email=:email, password=:password WHERE id = :id;');
        $stmt->bindValue(':id', $user->getId());
        $stmt->bindValue(':first_name', $user->getFirstName());
        $stmt->bindValue(':last_name', $user->getLastName());
        $stmt->bindValue(':username', $user->getUserName());
        $stmt->bindValue(':email', $user->getEmail());
        $stmt->bindValue(':password', $user->getPassword());
        $stmt->execute();
        return $this->read($user->getId());
    }

    /**
     * @access public
     * @param String email
     * @return User
     * @ParamType email String
     * @ReturnType User
     */
    public function findByEmail($email) {
        $stmt = $this->pdoInstance->prepare('
            SELECT * FROM user WHERE email = :email;');
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        if ($stmt->rowCount() > 0)
            return $stmt->fetchAll(\PDO::FETCH_CLASS, "domain\User")[0];
        return null;
    }

    public function findByUsername($username) {
        $stmt = $this->pdoInstance->prepare('
            SELECT * FROM user WHERE username = :username;');
        $stmt->bindValue(':username', $username);
        $stmt->execute();
        if ($stmt->rowCount() > 0)
            return $stmt->fetchAll(\PDO::FETCH_CLASS, "domain\User")[0];
        return null;
    }

}