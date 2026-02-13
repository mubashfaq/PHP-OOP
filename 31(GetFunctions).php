<?php

// get_class -> return name of class name by passing object name
// get_parent_class -> return name of parent class name by passing object name to child class
// get_class_methods -> return (only public) method name of class if outside class (inside class return all)
// get_class_vars -> return variable (public) of class (inside class return all)
// get_object_vars -> return variable (public) by passing object (inside class return all)
// get_called_class -> return class name which is called
// get_declared_classes -> return all classes which is declared in a page/file
// get_declared_interfaces -> return all interface which is declared in a page/file
// get_declared_traits -> return all traits which is declared in a page/file
// class_alias -> with this we assign different name to class

class classAlias
{
    public $name = "Ramadan";
}

class_alias("classAlias", "alias");

$obj = new alias();
echo $obj->name;


