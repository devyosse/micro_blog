<?php

namespace App\Model\Manager;
use App\Model\DB;

class RoleManager {

    private string $table = 'roles';
    private UserRoleManager $userRoleManager;

    public function __construct()
    {
        $this->userRoleManager = new UserRoleManager();
    }


    public function findAll(): array
    {
        $roles = [];
        $query = DB::getPDO()->query("select * FROM  role " );
        if ($query) {
            foreach ($query->fetchAll() as $roleData) {
                $role = new Role();
                $role->setId($roleData['id']);
                $role->setRoleName($roleData['role_name']);
                $role->setType($roleData['type']);
                $role->setUsers($this->userRoleManager->getUsersByRoleId($roleData['id']));
                $roles[] = $role;
            }
        }
        return $roles;
    }

    public static function getTableName(): string
    {
        return 'role';
    }
}