<?php

class toString{
    public $name, $age;

    public function __toString()
    {
        return "Name $this->name, Age $this->age";
        // return "For object use print_r instead of echo";
    }


}

$obj = new toString();
$obj->name = "ION";
$obj->age = 23;
echo($obj);