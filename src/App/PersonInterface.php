<?php

namespace App;


interface PersonInterface
{
    const ERR_EMPTY_FN = 'First name cannot be empty';
    const ERR_EMPTY_LN = 'Last name cannot be empty';

    /** @return string */
    public function getFirstName();

    /**
     * @param string $firstName
     * @throws \Exception
     */
    public function setFirstName($firstName);

    /** @return string */
    public function getLastName();

    /**
     * @param string $lastName
     * @throws \Exception
     */
    public function setLastName($lastName);

    /** @return string */
    public function getFullName();

    /** @return \stdClass */
    public function getJsonObject();

    /** @return string */
    public function getJsonString();
}