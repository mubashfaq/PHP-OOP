<?php

// Traits is use to use in multiple classes
trait hello{

    public function show($name){
        echo "Say Hello to " . $name . '<br>';
    }
    public function calc($a, $b){
        echo $a + $b;
    }
}

class a{
    use hello;
}
class b{
    use hello;
}
class c{
    use hello;
}

$person1 = new a;
$person2 = new b;
$person3 = new c;
$person1->show("Ali");
$person2->show("Waqas");
$person3->show("Numan");
$person1->calc(10, 5);