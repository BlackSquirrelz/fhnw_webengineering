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

class ProjectDAO extends BasicDAO
/**
* @access public
* @param Customer customer
* @return Customer
* @ParamType customer Customer
* @ReturnType Customer
*/
    public function create(Project $project) {
        $stmt = $this->pdoInstance->prepare('
            INSERT INTO project (project_name, project_desc, p_startdate, p_enddate, p_admin, p_owner)
            VALUES (:p_name, :p_desc , :p_start, :p_end, :p_admin, :p_owner)');
        $stmt->bindValue(':p_name', $project->getName());
        $stmt->bindValue(':p_desc', $project->getName());
        $stmt->bindValue(':p_start', $project->getName());
        $stmt->bindValue(':p_end', $project->getName());
        $stmt->bindValue(':p_admin', $project->getName());
        $stmt->bindValue(':p_owner', $project->getName());
        $stmt->execute();
        return $this->read($this->pdoInstance->lastInsertId());
    }

    /**
     * @access public
     * @param int customerId
     * @return Customer
     * @ParamType customerId int
     * @ReturnType Customer
     */
    public function read($customerId) {
        $stmt = $this->pdoInstance->prepare('
            SELECT * FROM customer WHERE id = :id;');
        $stmt->bindValue(':id', $customerId);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(\PDO::FETCH_CLASS, "domain\Customer")[0];
        }
        return null;
    }

    /**
     * @access public
     * @param Customer customer
     * @return Customer
     * @ParamType customer Customer
     * @ReturnType Customer
     */
    public function update(Customer $customer) {
        $stmt = $this->pdoInstance->prepare('
            UPDATE customer SET name = :name,
                email = :email,
                mobile = :mobile
            WHERE id = :id');
        $stmt->bindValue(':name', $customer->getName());
        $stmt->bindValue(':email', $customer->getEmail());
        $stmt->bindValue(':mobile', $customer->getMobile());
        $stmt->bindValue(':id', $customer->getId());
        $stmt->execute();
        return $this->read($customer->getId());
    }

    /**
     * @access public
     * @param Customer customer
     * @ParamType customer Customer
     */
    public function delete(Customer $customer) {
        $stmt = $this->pdoInstance->prepare('
            DELETE FROM customer
            WHERE id = :id
        ');
        $stmt->bindValue(':id', $customer->getId());
        $stmt->execute();
    }

    /**
     * @access public
     * @param int agentId
     * @return Customer[]
     * @ParamType agentId int
     * @ReturnType Customer[]
     */
    public function findByAgent($agentId) {
        $stmt = $this->pdoInstance->prepare('
            SELECT * FROM customer WHERE agentid = :agentId ORDER BY id;');
        $stmt->bindValue(':agentId', $agentId);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "domain\Customer");
    }
}
?>