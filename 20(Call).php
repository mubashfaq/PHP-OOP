<?php

// call is like get but get for property and call for method

class callMethod{
    private $name, $age;

    private function setRecord($name, $age){
        $this->name = $name;
        $this->age = $age;  
    }

    public function __call($method, $arguments)
    {
        if(method_exists($this, $method)){
            call_user_func_array([$this, $method], $arguments);
        }else{
            echo "This method not exist : $method";
        }
    }
}

$obj = new callMethod();

$obj->setRecord('Ali', 'Ramadan');

echo '<pre>';
print_r($obj);
echo '</pre>';