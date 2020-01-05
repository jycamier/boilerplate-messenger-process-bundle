<?php

namespace App\Application\Command;

class CreateUser
{
    /**
     * @var string
     */
    private $uuid;
    /**
     * @var string
     */
    private $familyName;
    /**
     * @var string
     */
    private $firstName;

    public function __construct(string $uuid, string $familyName, string $firstName)
    {
        $this->uuid = $uuid;
        $this->familyName = $familyName;
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
    public function getFamilyName(): string
    {
        return $this->familyName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
}
