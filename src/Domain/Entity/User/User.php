<?php

namespace App\Domain\Entity\User;

class User
{
    public static function create(string $uuid, string $lastName, string $firstName): self
    {
        return new self($uuid, $lastName, $firstName);
    }

    private $uuid;
    private $lastName;
    private $firstName;

    protected function __construct(string $uuid, string $lastName, string $firstName)
    {

        $this->uuid = $uuid;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
}
