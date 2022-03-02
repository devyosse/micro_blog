<?php


use App\Model\Manager\RoleManager;

require __DIR__ . '/includes.php';

$roleManager = new RoleManager();
$roles = $roleManager->findAll();

foreach ($roles as $role){
    $id = $role->getId();
    $name = $role->getRoleName();
    $type = $role->getType();
}