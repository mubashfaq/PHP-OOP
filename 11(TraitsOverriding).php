<?php

// trait overridTrait{
//     public function show(){
//         echo "Say Hi.";
//     }
// }

// class first{
//     public function show(){
//         echo "Say Hello.";
//     }
// }

// class seconnd extends first{
//     use overridTrait;
//     public function show(){
//         echo "Say Bye.";
//     }
// }

// $person1 = new seconnd;
// $person1->show();


trait overridTrait02{
    private function insideTrait(){
        echo "Function with Private modifier";
    }
}

class first02{
use overridTrait02{
    overridTrait02::insideTrait as public insideClass;
    // here modifier change to public and function name change to insideClass 
}
}

$test = new first02();
$test->insideClass();