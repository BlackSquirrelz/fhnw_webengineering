<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 15:06
 */

namespace dao;

use domain\AuthToken;


class AuthTokenDAO extends BasicDAO
{
    public function create(AuthToken $authToken){
        $stmt = $this->pdoInstance->prepare('INSERT INTO authtoken (selector, validator, expiration, user_id, type)
          VALUES (:selector,:validator,:expiration, :user_id, :type);');
        $stmt->bindValue(':selector', $authToken->getSelector());
        $stmt->bindValue(':validator', $authToken->getValidator());
        $stmt->bindValue(':expiration', $authToken->getExpiration());
        $stmt->bindValue(':user_id', $authToken->getUserId());
        $stmt->bindValue(':type', $authToken->getType());
        $stmt->execute();
        return $this->findBySelector($authToken->getSelector());
    }

    public function delete(AuthToken $authToken){
        $stmt = $this->pdoInstance->prepare('
            DELETE FROM authtoken
            WHERE id = :id
        ');
        $stmt->bindValue(':id', $authToken->getId());
        $stmt->execute();
    }

    public function findBySelector($selector) {
        $stmt = $this->pdoInstance->prepare('
            SELECT * FROM authtoken WHERE selector = :selector;');
        $stmt->bindValue(':selector', $selector);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(\PDO::FETCH_CLASS, "domain\AuthToken")[0];
        }
        return null;
    }
}