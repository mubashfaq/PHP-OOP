<?php

class unsetClass{
    public $name = "Ali";
    private $age = 23;

    public function __unset($property)
    {
        unset($this->$property);
    }
}

$obj = new unsetClass();
unset($obj->age);

print_r($obj);