<?php

namespace App\Application\Command\User;

class CreateUser
{
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var string
     */
    private $lastName;
    /**
     * @var string
     */
    private $firstName;

    public function __construct(string $uuid, string $lastName, string $firstName)
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
