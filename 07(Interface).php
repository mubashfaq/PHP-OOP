<?php

//  Interface (for security purposes) is like abstract class required derived class, method declare but not implemented, not make object
// to use multiple classes not use inheritance but use interface 

// difference from abstract 
// 1. no property(variable in interface)
// 2. not required to use abstract before method
// 3. in interface all method are declare not implemented while in abstract only abstract method not implemented while other can implement
// 4. in abstrcat derived class has only one base class while in interface derived class has many base classes(interfaces)
interface alphas
{
    function hello($name);
}

interface beta
{
    function hi($name);
    function bye($name);
}

class charlie implements alphas, beta
{
    public function hello($name)
    {
        echo 'HELLO ' . $name;
    }
    public function hi($name)
    {
        echo 'HI ' . $name;
    }
    public function bye($name)
    {
        echo 'BYE ' . $name;
    }
}

$person1 = new charlie();

$person1->hello("ALI BHAI");
echo '<br>';
$person1->hi("ALI BHAI");
echo '<br>';
$person1->bye("ALI BHAI");
