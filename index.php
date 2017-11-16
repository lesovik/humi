<?php

namespace App;

use App\Person\EmployeeFactory;

include 'config/config.php';
include 'autoloader.php';

//create employee from params
$employee = EmployeeFactory::create([
    'first_name' => 'employee',
    'last_name' => 'last',
]);

//if there is a reportee count present the app assumes that its a manager
$manager = EmployeeFactory::create([
    'first_name' => 'manager',
    'last_name' => 'last',
    'reportee_count' => 25,
]);

var_dump($employee->getJsonString(), $manager->getJsonString());

//converting to Employee
EmployeeFactory::promoteEmployeeToManager($employee);

var_dump($employee);


//from DB query
$myPDO = new \PDO('pgsql:host=localhost;dbname=employees', 'postgres', 'pass');
$result = $myPDO->query("SELECT * FROM employees");
$employees = [];
foreach ($result as $item) {
    $employees[] = EmployeeFactory::create(json_decode($item['details'], true));
}
var_dump($employees);
