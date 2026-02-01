<?php

//to store object in file, database, session it must convert into array 
// Object -> Array (serialize) object convert into array with this method
// with sleep we give only selective data

class sleep{
    public $name, $age, $phone, $gender, $address;

    public function __sleep()
    {
       return array("name", "age", "gender");
    }

}

$obj = new sleep();
$obj->name = "Furqan";
$obj->age = 20;
$obj->phone = 56789325325;
$obj->gender = "Male";
$obj->address = "LHR";

$obj01 = serialize($obj);
print_r($obj01);

