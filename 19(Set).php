<?php

// set = run when private property access outside class or any property which are not in class ( actually set private property value from outside)

class setTest{
    private $name;

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
             $this->$property = $value; // ✅ correct
        } else {
            echo "Property '$property' does not exist";
        }
    }
}

$obj = new setTest();

$obj->name = 'DELL';

