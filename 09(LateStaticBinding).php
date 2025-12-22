<?php

// class LateBinding1{
//     protected static $name = "First Name";

//     public static function show(){
//         echo self::$name;
//     }
// }

// $person1 = LateBinding1::show();

class LateBinding1{
    protected static $name = "First Name";

    public  function show(){
        echo static::$name;
    }
}

class LateBinding2 extends LateBinding1{
    protected static $name = "Second Name";

}

$person1 = new LateBinding2();
$person1->show();