<?php

namespace App\Person\Employee;


use App\Person\Employee;


class Manager extends Employee
{
    /** @var int|null */
    protected $reporteeCount = null;


    public function __construct(array $args = [])
    {
        parent::__construct($args);
        $this->reporteeCount = (empty($args['reportee_count'])) ? null : $args['reportee_count'];
    }

    /** @return int */
    public function getReporteeCount()
    {
        return ($this->reporteeCount) ?: 0;
    }

    /** @inheritdoc */
    public function getJsonObject()
    {
        $json = parent::getJsonObject();
        $json->reportee_count = $this->getReporteeCount();

        return $json;
    }

}