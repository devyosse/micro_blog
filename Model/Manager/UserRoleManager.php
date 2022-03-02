<?php

namespace App\Model\Manager;

class UserRoleManager {

    /**
     * @param int $roleId
     * @return array
     */
    public function getUsersByRoleId(int $roleId): array {
        $users = [];
        $usersQuery = DB::getPDO()->query("
            SELECT * FROM user WHERE id IN (SELECT user_fk FROM user_role WHERE  role_fk = $roleId);
        ");

        if ($usersQuery) {
            foreach ($usersQuery->fetchAll() as $userData) {
                $users[] = (new User())
                    ->setId($userData['id'])
                    ->setEmail($userData['email'])
                    ->setAge($userData['age'])
                    ->setFirstname($userData['firstname'])
                    ->setLastname($userData['lastname'])
                    ->setPassword($userData['password'])
                ;
            }
        }
        return $users;
    }
    public function getRolesByUserId(int $userId):array {
        return [];
    }
}