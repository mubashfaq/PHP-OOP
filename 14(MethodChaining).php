<?php

// Methodchaining use to declare method of same class in same line instead of different lines
class methodChaining{

    public function first(){
        echo "this is first<br>";
        return $this;
    }
    public function second(){
        echo "this is second<br>";
        return $this;
    }
    public function third(){
        echo "this is third<br>";
    }
}

$obj = new methodChaining();

$obj->first()->second()->third();