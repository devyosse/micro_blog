<?php

namespace App\Model\Entity;

class User extends AbstractEntity
{
    private string $email;
    private string $firstname;
    private string $lastname;
    private string $password;
    private int $age;
    private array $role;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): self
    {
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): self
    {
       return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): self
    {
       return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): self
    {
        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): self
    {
        return $this;
    }

    /**
     * @return array
     */
    public function getRole(): array
    {
        return $this->role;
    }

    /**
     * @param array $role
     */
    public function setRole(array $role): self
    {
       return $this;
    }

}