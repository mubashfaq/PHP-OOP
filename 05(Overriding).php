<?php


// MEthod Overriding = derived class override parent class method, different classes(base + derived), has same type and name, support in PHP
// Method Overloading = two method has same name but differet type in same class, not support in PHP
/*
🔹 Overloading vs Overriding (Interview Table)
| Feature          | Overloading  | Overriding     |
| ---------------- | ------------ | -------------- |
| Same method name | Yes          | Yes            |
| Parameters       | Different    | Same           |
| Class            | Same class   | Parent → Child |
| PHP support      | Indirect     | Yes            |
| Polymorphism     | Compile-time | Runtime        |
*/
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