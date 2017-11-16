<?php

namespace App\Person;


use App\PersonInterface;


class Employee implements PersonInterface
{
    /** @var string */
    protected $firstName;

    /** @var string */
    protected $lastName;


    public function __construct(array $args = [])
    {
        $this->firstName = (empty($args['first_name'])) ?: $args['first_name'];
        $this->lastName = (empty($args['last_name'])) ?: $args['last_name'];
    }

    /** @inheritdoc */
    public function setFirstName($firstName = null)
    {
        if (!empty($firstName)) {
            $this->firstName = $firstName;
        } else {
            throw new \Exception(self::ERR_EMPTY_FN);
        }
    }

    /** @inheritdoc */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /** @inheritdoc */
    public function setLastName($lastName = null)
    {
        if (!empty($lastName)) {
            $this->lastName = $lastName;
        } else {
            throw new \Exception(self::ERR_EMPTY_LN);
        }
    }

    /** @inheritdoc */
    public function getLastName()
    {
        return $this->lastName;
    }

    /** @inheritdoc */
    public function getFullName()
    {
        return trim($this->firstName . ' ' . $this->lastName);
    }

    /** @inheritdoc */
    public function getJsonObject()
    {
        return (object)[
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'full_name' => $this->getFullName(),
        ];

    }

    /** @inheritdoc */
    public function getJsonString()
    {
        return json_encode($this->getJsonObject());
    }

}