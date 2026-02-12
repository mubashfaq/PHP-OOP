<?php

// Magic Method run automatically without calling
// 01- constructor = run when we create object of class
// 02- destructor = run when object is removed(mean when last step of object is done)
// 03- autoload = autoload function load classes automatically without including
// 04- get = run when private property access outside class or any method which are not in class (actually get private property value from outside)
// 05- set = run when private property access outside class or any property which are not in class ( actually set private property value from outside)
// 06-  call = run when private method or non-existing method access outside class (also set private method value from outside)
// 07-  callStatic = run when private static method or non-existing method access outside class (also set private static method value from outside)
// 08- isset check whether value of private property exist 
// 09 - unset cause variable 
// 10 - toString run when object show as string
// 11 - sleep run before serialize(convert object -> array) method and clean array 
// 12 - wakeup run after unserialize(convert array -> object) method (reverse of sleep)
// 13 - clone run when object is cloned (functional for sub classes)
// 14 - invoke run when we make function of an abject