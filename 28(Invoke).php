<?php

class invoke{
    public $name, $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // public function show()
    // {
    //     echo "Name : $this->name  <br>  Age : $this->age";
    // }

    public function __invoke()
    {
        echo "Name : $this->name  <br>  Age : $this->age";
    }
}

$obj = new invoke("Usama", 23);
// $obj->show();

$obj();
// invoke run when function of object is created