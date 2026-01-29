<?php

// php builtin isset method -> check wether value of variable exist or not 
// $a = ''; true
// $a = 0; true
// $a = false; true
// $a = null; false
// $a = undefined; false

// php builtin empty method -> check wether value of variable not is empty  
// $a = ''; true
// $a = 0; true
// $a = false; true
// $a = null; true
// $a = undefined; true

// this magic method __isset() work with both empty and isset

class issetClass{
public $name = 'RAMADAN';
private $count = '09';

public function __isset($property)
{
   if($property === 'count'){
    return true;
   }else{
    return false;
   }
}

}

$obj = new issetClass();
echo isset($obj->name);
echo isset($obj->count);