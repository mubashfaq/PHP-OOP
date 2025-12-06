<?php

class Person
{
    public $name, $age, $gender;

    // function __construct($name = "Unknown", $age = 0, $gender = "Unknown") -> Default values
    function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    function show()
    {
        echo $this->name . " is " . $this->age  . " years old and is " . $this->gender;
    }
}

$person1 = new Person("Mubashar", 20, "Male");
$person1->show();