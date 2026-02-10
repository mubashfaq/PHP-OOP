<?php

class wakeup{
    public $name, $age, $gender;

    public function __sleep()
    {
        return array('name');
    }

    public function __wakeup()
    {
        echo "This is Wakeup Method";
    }
}

$obj = new wakeup();
$obj->name = "Furqan";
$obj->age = 20;
$obj->gender = "Male";

print_r($obj);
echo "<br>";

$obj01 = serialize($obj);

print_r($obj01);
echo "<br>";

$obj02 = unserialize($obj01);
print_r($obj02);
