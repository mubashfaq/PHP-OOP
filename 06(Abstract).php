<?php

// Abstract class cannot use directly (required derived class) mean cannot make object of it 

// FOR ABSTRACT CLASS 2 CONNDITION FOLLOWS
// 1.must have ABSTRACT METHOD (atleast 1)
// 2.ABSTRACT METHOD only declare not implemented(code)
// 2.implemented in derived class

abstract class Main {
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    abstract protected function show(); // only declare not implemented
}

class Sub extends Main {

    function show(){
        echo " Name : " . $this->name;
    }
}

$person1 = new Sub('Ali');

$person1->show();

