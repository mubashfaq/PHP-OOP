<?php

class Employee
{
    public $name, $age, $salary;

    function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    function show()
    {
        echo "Employee: " . $this->name . " - " . $this->age . " - " . $this->salary;
    }
}

// Inheritance is a way to create a new class from an existing class.
// The new class is called the subclass, and the existing class is called the superclass.
// The subclass inherits the properties and methods of the superclass.
// The subclass can add new properties and methods, or override the properties and methods of the superclass.
// The subclass can also call the methods of the superclass.
// The subclass can also call the properties of the superclass.
// The subclass can also call the methods of the superclass.
class Manager extends Employee{
    public $bonus = 23000;
    public $totalSalary;

    function show()
    {
        $this->totalSalary = $this->salary + $this->bonus;
        echo '<br>';
        echo "Manager: " . $this->name . " - " . $this->age . " - " . $this->totalSalary;

    }

}

$employee1 = new Employee("Mubashar", 20, 36000);
$manager1 = new Manager("Saad", 28, 42000);
$employee1->show();
$manager1->show();
