<?php

// $a = 5;
// $b = $a;
// $b = 10;

// echo $a; // 5
// echo "<br>";
// echo $b; // 10
// this is "copy by value"

// $a = 5;
// $b = &$a; // & this is reference operator
// $b = 10;

// echo $a; // 10
// echo "<br>";
// echo $b; // 10
// this is "copy by reference"


// but in classes copy by reference is default for copy by value we use clone
// but for sub classes we use __clone() method to copy sub classes

class cloneClass
{
    public $name, $age, $gender, $course;

    public function __construct($n, $a, $g)
    {
        $this->name = $n;
        $this->age = $a;
        $this->gender = $g;

    }

    public function setCourse($n)
    {
        $this->course = $n;
    }

    public function __clone()
    {
        $this->course = clone $this->course;
    }
}

$obj = new cloneClass("Malik", 27, "Male");

class course
{
    public $name;

    public function __construct($n)
    {
        $this->name = $n;
    }
}

$course = new course("CS");
$obj->setCourse($course);
// $obj01 = $obj;
// $obj01->name = "Furqan";

// in this scenario name of $obj also become furqan not malik to avoid this we use clone

$obj01 = clone $obj;
$obj01->name = "Furqan";
$obj01->course->name = "AI";

// without using __clone both object carry new value not separate
print_r($obj);
echo "<br>";
print_r($obj01);


