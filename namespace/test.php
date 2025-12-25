<?php

namespace second;

class Test02{
    public function __construct()
    {
        echo "This is constructor function from Test02 of test.php<br>";
    }
}

class calc
{
    public function sub($a, $b)
    {
        echo $a - $b;
    }
}
