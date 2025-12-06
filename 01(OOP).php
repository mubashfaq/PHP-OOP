<?php


//  CLASS = Blueprint which uses property and method
class calculation
{
    // accesser (PUBLIC)
    public $a, $b, $c;  // Property = variables

    // METHOD = functions
    function multiply()
    {
        $this->c = $this->a * $this->b;
        return $this->c;
    }
    function add()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function subtract()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

//  OBJECT = instance from class
$firstPerson = new calculation();

$firstPerson->a = 10;
$firstPerson->b = 2;

echo $firstPerson->multiply();
echo '<br>';
echo $firstPerson->subtract();
echo '<br>';




class PersonSimple {
     public $name, $age;
     function show(){
        echo $this->name . " is " . $this->age . " years old";
     }
}

$person1 = new PersonSimple();
$person1->name = "ALI";
$person1->age = 20;
$person1->show();




