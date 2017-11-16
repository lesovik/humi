<?php

namespace App\Person;


class EmployeeFactory
{
    /**
     * @param [] $args
     * @return Employee
     */
    protected static function createEmployee(array $args = [])
    {
        return new Employee($args);
    }

    /**
     * @param [] $args
     * @return Employee
     */
    protected static function createManager(array $args = [])
    {
        return new Employee\Manager($args);
    }

    /**
     * this function will decide which employee to create based on params
     * to keep it simple - based on presence of $args['reportee_count']
     *
     * @param [] $args
     * @return Employee|Employee\Manager
     */
    public static function create(array $args = [])
    {
        return (isset($args['reportee_count'])) ? self::createManager($args) : self::createEmployee($args);
    }

    /**
     * @param Employee $employee
     */
    public static function promoteEmployeeToManager(Employee &$employee)
    {
        $employee = new Employee\Manager([
            'first_name' => $employee->getFirstName(),
            'last_name' => $employee->getLastName(),
        ]);
    }

}