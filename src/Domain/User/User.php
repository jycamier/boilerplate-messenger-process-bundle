<?php

namespace App\Domain\User;

class User
{
    public static function create(string $uuid, string $familyName, string $firstName): self
    {
        return new self($uuid, $familyName, $firstName);
    }

    private $uuid;
    private $familyName;
    private $firstName;

    protected function __construct(string $uuid, string $familyName, string $firstName)
    {
        $this->uuid = $uuid;
        $this->familyName = $familyName;
        $this->firstName = $firstName;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getFamilyName(): string
    {
        return $this->familyName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }
}
