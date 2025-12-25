<?php

namespace OOP\index;
require "test.php";

class Test
{
    public function __construct()
    {
        $obj = new \second\Test02();
    }
}

class calc
{
    public function sum($a, $b)
    {
        echo $a + $b;
    }
}

// $test = new Test();
