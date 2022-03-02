<?php

namespace App\Model\Manager;

class UserManager
{
    public function getUserById(int $id): User
    {
        $user = new User();

        return $user;
    }
}