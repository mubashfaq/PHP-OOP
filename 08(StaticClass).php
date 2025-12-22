<?php

// for STATIC class = all method + property should be static (if any not static then it will not static class)
// Static property + method can use outside class without object

class Static01{
    public static $name = "Yahu Babas";
    
        public static function show(){
            echo self::$name;
        }

        public function __construct($name)
        {
            self::$name = $name;

        }
}

// class Static02 extends Static01{
//     public function show(){
//         echo Parent::$name;
//     }
// }


// $person1 = new Static02;

$person2 = new Static01("Ali");

// $person1 = Static01::show();