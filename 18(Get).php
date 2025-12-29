<?php

// get = run when private property access outside class or any property which are not in class 

// class getTest{
//     private $name = "Guru";

//     public function show(){
//         echo "Private Name is " . $this->name; 
//     }

//     public function __get($property)
//     {
//         echo "Your are getting private or not present property : " . $property ;
//     }
// }

// $obj = new getTest();
// // $obj->show();
// // $obj->name;
// $obj->cursoe;

class getTest
{
    private $data = ['name' => 'Ali', 'age' => 24, 'gender' => 'male'];

    public function __get($key)
    {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        } else {
            echo "This property($key) not exist";
        }
    }
}

$obj = new getTest();
echo $obj->name;
