- please use PHP to complete this challenge 
- please follow the PSR 1 and 2 style guides
- you may use multiple files and folders to demostrate structure

The Challenge - Part 1
-----------------------------

- All items should belong to an App namespace

- Create a Person Interface
	- ensure a person has getters and setters for first name, last name
	- ensure we can get a person's full name as a string (first and last)
	- ensure we can get a person represented as a JSON string (first name, last name, full name)

- Create an Employee class, it should be based on the Person interface
	- an employees first name must not be empty, setting to empty should throw an Exception
	- an employees last name must not be empty, setting to empty should throw an Exception

- Create a Manager class, managers are also Employees (and should have the same restrictions/exceptions)
	- a manager should have a reportee property (which contains the number of reportees they have as an integer)
	- the reportee property should be optional
	- attempting to retrieve a reportee count that is not set should return the integer 0
	- retrieving a Manager as a json string should also include the reportee count

The Challenge - Part 2
-----------------------------
- Create a new employee:
	- Demonstrate the use of the factory design pattern when creating a new employee
	- Demonstrate how you would promote an Employee to a Manager, and continue working with their object

The Challenege - Part 3
-----------------------------
- In the case that an employee may have many attributes, and we may want to retrieve many employees from a database
	- Demonstrate a way in which we can retrieve many employee rows from a database, and return them as Employee objects
