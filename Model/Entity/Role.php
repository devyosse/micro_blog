<?php

namespace App\Model\Entity;

class Role extends AbstractEntity
{
    private ?string $rolename;
    private ?int $type;
    private array $user;

    public function __construct()
    {
        $this->user = [];
    }
}