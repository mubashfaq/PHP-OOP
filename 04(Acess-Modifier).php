<?php

class Person
{
    public $name;
    // PUBLIC = accessiable everywhere mean (inside class + subclass + outside class)
    // PROTECTED = accessiable at (inside class + subclass)
    // PRIVATE = accessiable at (inside class)

    function __construct($name)
    {
        $this->name = $name;
    }

    function show()
    {
        echo "Name : " . $this->name;
    }
}

$firstPerson = new Person("Dell");

$firstPerson->show();
