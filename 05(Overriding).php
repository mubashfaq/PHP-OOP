<?php

class base
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function show()
    {
        echo "Base Name : " . $this->name;
    }
}

class derived extends base {
    function show()
    {
        echo "Derived Name : " . $this->name;
    }
}

$person1 = new base("MUBASHAR");
$person2 = new derived("ASHFAQ");

$person1->show();
$person2->show();


// METHOD OVERRIDING = function override
// PROPERTY OVERRIDING = variables value override