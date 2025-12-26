<?php

// autoload = autoload function load classes automatically without including
// things to remember
// 1. file and class name must be same
// 2. spellig is same (case sensitive)
spl_autoload_register(function ($class) {
    require $class . ".php";
});

$obj1 = new second();
